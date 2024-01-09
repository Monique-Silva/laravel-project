<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MeowController extends Controller
{
    public function showAllMessages()
    {
        return view('meows-list');
    }

    public function showMessageById(string $id)
    {
        return view('meows-details');
    }
/*
    public function store(Request $request): RedirectResponse {
        $message->message = $request->message;
        $message->save();
        return redirect('/meows');
    }
    */

}
