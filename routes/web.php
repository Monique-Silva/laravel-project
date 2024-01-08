<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return 'Homepage';
});

Route::get('/meows', function () {
    return 'Meoooooooooowww meow meooooow meow';
});

Route::get('/meow/{id}', function (string $id) {
    return 'Message 1';
})
?>
