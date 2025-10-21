<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardProfileController extends Controller
{
    public function index(Request $request) {
        return view('profile', [
            'title' => 'Profil',
            'username' => $request->username
        ]);
    }
}
