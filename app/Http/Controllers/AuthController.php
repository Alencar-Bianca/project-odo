<?php

namespace App\Http\Controllers;

use Illuminate\Http\UserRequest;

class AuthController extends Controller
{
    public function login() {
        return view('login');
    }
    public function register() {
        return view('register');
    }
    public function registerUser(UserRequest $userRequest) {
        return view('register');
    }
}

