<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request) {
        $penduduks = [
            [
                "nama" => "Arie",
                "jk" => "Laki-Laki",
                "tingkat_pendidikan" => "SMP",
                "umur" => 18
            ],
            [
                "nama" => "Arvin",
                "jk" => "Laki-Laki",
                "tingkat_pendidikan" => "SMA",
                "umur" => 19
            ],
            [
                "nama" => "Elaina",
                "jk" => "Perempuan",
                "tingkat_pendidikan" => "SMP",
                "umur" => 17
            ],
        ];

        return view('dashboard', [
            'title' => 'Dashboard',
            'username' => $request->username,
            'penduduk_count' => count($penduduks)
        ]);
    }
}
