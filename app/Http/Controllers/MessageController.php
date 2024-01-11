<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function showAllMessages()
    {
        return view('messages-list');
    }

    public function showMessageById(string $id)
    {
        return view('messages-details');
    }
/*
    public function store(Request $request): RedirectResponse {
        $message->message = $request->message;
        $message->save();
        return redirect('/messages');
    }
    */

}
