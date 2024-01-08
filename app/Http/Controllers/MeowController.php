<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeowController extends Controller
{
    public function showAllMessages() {
        return 'Meoooooooooowww meow meooooow meow';
    }

    public function showMessageById(string $id) {
        return "I'm number One";
    }


}
