<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;

class ChatController extends Controller
{
    //
    public function messages(){
        $data = Chat::all();
        return view('chat-system.index', ['chats' => $data]);
    }

    public function send(Request $request){
        $data = $request->validate([
            'message' => 'required'
        ]);

        try {
            $new_message = Chat::create($data);
            return redirect(route('chat.messages'));
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}

