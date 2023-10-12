<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Auth;
class AuthController extends Controller
{
    public function login() {
        if (Auth::check()) {
            return redirect()->route('home.index');
        }
        return view('login');
    }
    public function logar(Request $request) {
        $user = User::logarUser($request);

        if (!$user) {
            return view('login');
        }
        return redirect()->route('home.index');
    }
    public function register() {
        if (Auth::check()) {
            return redirect()->route('home.index');
        }
        return view('register');
    }
    public function registerUser(UserRequest $userRequest) {
        User::createUser($userRequest->validated());

        return view('login');
    }
    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }
}

