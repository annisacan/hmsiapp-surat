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
}
