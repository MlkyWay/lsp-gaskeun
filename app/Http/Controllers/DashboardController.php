<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahUser = User::count();
        return view('dashboard.welcome', ['jumlah_user' => $jumlahUser]);
    }
}
