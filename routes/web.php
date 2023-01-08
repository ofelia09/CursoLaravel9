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
    return view('welcome');
});

Route::get('/test', function () {
    return view('prueba');
})->name('hola');

Route::get('/prueba2', function (){
    $msj = "Holi crayoli👻";
    $data = [
        'msj' => $msj,
        'num' => 3
    ];
    return view('prueba2', $data);
});
