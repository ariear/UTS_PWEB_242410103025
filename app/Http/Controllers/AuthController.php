<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() {
        return view('login');
    }

    public function login_action(Request $request) {
        $username = $request->username;
        return redirect("/dashboard?username=$username");
    }
}
