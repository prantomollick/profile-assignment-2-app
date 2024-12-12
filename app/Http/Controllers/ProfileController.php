<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index(Request $request, $id) {
        $name =  "Donald Trump"; 
        $age = "75"; 

        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

        $cookie_name = 'access_token';
        $cookie_value = '123-XYZ';
        $cookie_lifetime = 1;
        $cookie_path = '/';
        $cookie_domain = $_SERVER['SERVER_NAME'];
        $cookie_secure = false;
        $cookie_httponly = true;

        $cookie = cookie(
        $cookie_name,
        $cookie_value, 
        $cookie_lifetime,
        $cookie_path, 
        $cookie_domain, 
        $cookie_secure, 
        $cookie_httponly
        );
        
        return response()->json($data, 200)->cookie($cookie);
    }
}
