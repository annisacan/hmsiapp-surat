<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KahimController extends Controller
{
    public function index()
    {
        return view('kahim.index');
    }
}
