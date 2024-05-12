<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() // Mengubah dari index() menjadi dashboard()
    {
        // Logika untuk menampilkan halaman dashboard
        return view('dashboard');
    }
}
