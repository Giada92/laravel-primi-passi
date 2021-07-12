<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        "name" => "Giada",
        "todolist" => [
            "Portare fuori il cane",
            "Guardare Atipycal",
            "Fare la spesa"
        ]
    ];
    return view('home', $data);
});

Route::get('/contattaci', function () {
    return view('contatti');
});
