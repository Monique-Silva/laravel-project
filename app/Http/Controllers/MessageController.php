<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Auth\Access\Gate;
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

      /**
     * Update the given post.
     */
    public function update(Request $request, Message $message): RedirectResponse
    {
        if (! Gate::allows('update-message', $message)) {
            abort(403);
        }

        // Update the post...

        return redirect('/messages');
    }
/*
    public function store(Request $request): RedirectResponse {
        $message->message = $request->message;
        $message->save();
        return redirect('/messages');
    }
    */


}
