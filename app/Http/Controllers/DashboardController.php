<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    function __construct()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        
        $this->middleware('auth');
    }
    public function dashboard()
    {
        return view('dashboard');
    }

    public function dashboardbend()
    {
        return view('dashboardbend');
    }

    public function dashboarddiv()
    {
        return view('dashboarddiv');
    }
}
