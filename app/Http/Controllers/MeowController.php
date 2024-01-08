<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

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
}
