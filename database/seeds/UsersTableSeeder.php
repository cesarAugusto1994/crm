<?php

use App\User;
use jeremykenedy\LaravelRoles\Models\Role;
use jeremykenedy\LaravelRoles\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $userRole 			= Role::where('name', '=', 'User')->first();
        $adminRole 			= Role::where('name', '=', 'Admin')->first();
		$permissions 		= Permission::all();

	    /**
	     * Add Users
	     *
	     */
        if (User::where('email', '=', 'admin@admin.com')->first() === null) {

	        $newUser = User::create([
	            'name' => 'Admin',
              'login' => str_slug('Admin'),
	            'email' => 'admin@admin.com',
              'empresa_id' => 8,
              'area_id' => 1,
              'nivel' => 3,
	            'password' => bcrypt('password'),
	        ]);

	        $newUser->attachRole($adminRole);
    			foreach ($permissions as $permission) {
    				$newUser->attachPermission($permission);
    			}

        }

        if (User::where('email', '=', 'cezzaar@gmail.com')->first() === null) {

	        $newUser = User::create([
	            'name' => 'Cesar',
              'login' => str_slug('cezzaar'),
	            'email' => 'cezzaar@gmail.com',
              'empresa_id' => 8,
              'area_id' => 1,
              'nivel' => 4,
	            'password' => bcrypt('123123'),
	        ]);

	        $newUser;
	        $newUser->attachRole($userRole);

        }

        $itens = array (
  0 =>
  array (
    'id' => 3,
    'nome' => 'Cida',
    'email' => 'financeiro@brasitelhas.com.br',
    'usuario' => 'cida',
    'senha' => 'ec7117851c0e5dbaad4effdb7cd17c050cea88cb',
    'nivel' => 2,
    'status' => 1,
    'id_area' => 3,
    'id_empresa' => 1,
    'log' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1 =>
  array (
    'id' => 6,
    'nome' => 'Ednei',
    'email' => 'ednei@brasitelhas.com.br',
    'usuario' => 'ednei',
    'senha' => 'ec7117851c0e5dbaad4effdb7cd17c050cea88cb',
    'nivel' => 2,
    'status' => 1,
    'id_area' => 2,
    'id_empresa' => 1,
    'log' => '0',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  2 =>
  array (
    'id' => 13,
    'nome' => 'Renato',
    'email' => 'renato@netma.com.br',
    'usuario' => 'renatomeca',
    'senha' => '7c4a8d09ca3762af61e59520943dc26494f8941b',
    'nivel' => 1,
    'status' => 1,
    'id_area' => 7,
    'id_empresa' => 2,
    'log' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  3 =>
  array (
    'id' => 14,
    'nome' => 'Mauricio Barbella',
    'email' => 'mauricio.barbella@netma.com.br',
    'usuario' => 'mauricio',
    'senha' => '7c4a8d09ca3762af61e59520943dc26494f8941b',
    'nivel' => 2,
    'status' => 1,
    'id_area' => 8,
    'id_empresa' => 2,
    'log' => '0',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  4 =>
  array (
    'id' => 15,
    'nome' => 'Cassio',
    'email' => 'cassio@netma.com.br',
    'usuario' => 'cassio',
    'senha' => '7c4a8d09ca3762af61e59520943dc26494f8941b',
    'nivel' => 3,
    'status' => 1,
    'id_area' => 9,
    'id_empresa' => 2,
    'log' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  5 =>
  array (
    'id' => 17,
    'nome' => 'Salomé',
    'email' => 'contato@seabra.com.br',
    'usuario' => 'salome',
    'senha' => 'ec7117851c0e5dbaad4effdb7cd17c050cea88cb',
    'nivel' => 4,
    'status' => 1,
    'id_area' => 12,
    'id_empresa' => 8,
    'log' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  6 =>
  array (
    'id' => 18,
    'nome' => 'flavio',
    'email' => 'fla@seabra.com.br',
    'usuario' => 'flavio',
    'senha' => 'ec7117851c0e5dbaad4effdb7cd17c050cea88cb',
    'nivel' => 1,
    'status' => 1,
    'id_area' => 10,
    'id_empresa' => 8,
    'log' => '1',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  7 =>
  array (
    'id' => 19,
    'nome' => 'ze',
    'email' => 'ze@seabra.com.br',
    'usuario' => 'ze',
    'senha' => 'ec7117851c0e5dbaad4effdb7cd17c050cea88cb',
    'nivel' => 2,
    'status' => 1,
    'id_area' => 13,
    'id_empresa' => 8,
    'log' => '1',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
);

        foreach ($itens as $key => $item) {

          if (User::where('email', '=', $item['email'])->first() === null) {

            $newUser = User::create([
                'name' => $item['nome'],
                'login' => str_slug($item['usuario']),
                'email' => $item['email'],
                'empresa_id' => $item['id_empresa'],
                'area_id' => $item['id_area'],
                'nivel' => $item['nivel'],
                'password' => $item['senha'],
            ]);

            $newUser;
            $newUser->attachRole($userRole);

          }

        }

    }
}
