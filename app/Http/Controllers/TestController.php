<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
    function test(){
        // $arreglo = [
        //     'nombre'=> 'Ofe',
        //     'email'=> 'hola@string.com'
        // ];
        //echo $user;
        //echo '<br>';
        //echo $user->email;
        //echo '<br>';
        //echo $arreglo['email'];
        //echo '<br>';
        // echo "Hola Mundo";

        $user = User::find(1);
        return view('welcome', ['user'=> $user]);
    }
}
