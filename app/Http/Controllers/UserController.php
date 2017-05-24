<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth\AuthController;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends AuthController {
    public function login(Request $request){
        $data = $request->all();
        $user = User::where('username',$data['user'])->orWhere('email',$data['user'])->get();
        dd($user->password);
    }
    public function register(Request $request){
        echo 123;

    }

}
