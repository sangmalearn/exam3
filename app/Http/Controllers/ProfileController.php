<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;


class ProfileController extends Controller
{
    // testing
    public function index($id){
    
    // Declare variables and assign 

    $name = "Donal Trump";
    $age = "75";

    // data array with id, name and age

    $data = [
        'id' => $id,
        'name' => $name,
        'age' => $age,
    ];
    //Set your cookie variables stated in the question

    $name = 'access_token';
    $value = '123-XYZ';
    $minutes = 1;
    $path = '/';
    $domain = $_SERVER['SERVER_NAME'];
    $secure = false;
    $httpOnly = true;

     //create the cookie instance 

     $cookie = Cookie::make($name, $value, $minutes, $path, $domain, $secure, $httpOnly);
    
    return response()->json($data, 200)->withCookie($cookie);


    }
}
