<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardKahimController extends Controller
{
    public function index()
    {
        return view('kahim.dashboard');
    }
}
