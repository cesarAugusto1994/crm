<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{User, Role};
use App\Models\Empresa;
use App\Models\Empresa\Departamentos;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('manage-users.index', User::class);

        $user = \Auth::user();

        if($user->isSuperuser()) {
            $users = User::where('empresa_id', $user->empresa_id)->paginate();
        } else {
            $users = User::paginate();
        }

        return view('admin.usuarios.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('manage-users.create', User::class);

        $empresas = Empresa::where('status', true)->get();
        $departamentos = Departamentos::all();
        return view('admin.usuarios.create', compact('user', 'departamentos', 'empresas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->request->all();

        $validate = Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'login' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if($validate->fails()) {
          return redirect()->back()->withErrors($validate)->withInput();
        }

        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);
        $user->roles()->attach(Role::where('name', 'user')->first());

        flash('Usuário adicionado com sucesso!')->success()->important();

        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function profile()
    {
        $user = \Auth::user();

        return view('empresa.user.profile', compact('user'));
    }

    public function editarPerfil(Request $request)
    {
        $data = $request->request->all();

        $user = User::findOrFail($data['id']);

        $user->update($data);

        flash('Os dados foram atualizados com sucesso!')->success()->important();

        return redirect()->route('perfil');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        $this->authorize('manage-users.view', $user);

        $departamentos = Departamentos::all();

        return view('admin.usuarios.edit', compact('user', 'departamentos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->request->all();

        $validate = Validator::make($data, [
            'name' => 'required|string|max:255',
            /*'email' => 'required|string|email|max:255|unique:users,id,'.$id,*/
        ]);

        if($validate->fails()) {
          return redirect()->back()->withErrors($validate)->withInput();
        }

        $user = User::findOrFail($id);

        if(!$user->isUser() && !$user->isAdmin()) {
            $user
           ->roles()
           ->attach(Role::where('name', 'user')->first());
        }

        if($request->has('role_id')) {

          $user
         ->detachAllRoles();

          $user
         ->roles()
         ->attach(Role::findOrFail($data['role_id']));

        }

        $user->update($data);

        flash('Os dados foram alterados com sucesso!')->success()->important();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    public function editPassword(Request $request, $id)
    {
        $data = $request->request->all();

        $user = User::findOrFail($id);

        return view('admin.usuarios.password', compact('user'));
    }

    public function updatePassword(Request $request, $id)
    {
        $data = $request->request->all();

        $validate = Validator::make($data, [
            'password' => 'required|string|min:6|confirmed',
        ]);

        if($validate->fails()) {
          return redirect()->back()->withErrors($validate)->withInput();
        }

        $user = User::findOrFail($id);

        $data['password'] = bcrypt($data['password']);

        $user->update($data);

        flash('Os dados foram alterados com sucesso!')->success()->important();

        return redirect()->back();
    }
}
