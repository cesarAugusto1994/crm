<?php

namespace App\Http\Controllers;
use App\Models\Chamados\Logs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatsController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    /**
     * Show chats
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('empresa.chat.index');
    }

    /**
     * Fetch all messages
     *
     * @return Logs
     */
    public function fetchMessages()
    {
      return Logs::with('user')->get();
    }

    /**
     * Persist message to database
     *
     * @param  Request $request
     * @return Response
     */
    public function sendMessage(Request $request)
    {
      $user = Auth::user();

      $message = $user->messages()->create([
        'message' => $request->input('message')
      ]);

      return ['status' => 'Message Sent!'];
    }
}
