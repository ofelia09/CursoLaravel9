<?php

use App\Http\Controllers\Test2Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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


Route::get('/',[TestController::class, 'test']);
Route::get('/index',[Test2Controller::class, 'index']);

Route::get('/home', function (){
    $data = [
        "nombre",
        "edad",
        "correo",
        "id_profesor",
        "contrasena"
    ];
    return view('home',["data" => $data]);
});