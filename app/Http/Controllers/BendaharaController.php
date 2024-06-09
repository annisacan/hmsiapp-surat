<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BendaharaController extends Controller
{
    public function danamasuk()
    {
        return view('bendahara.danamasuk');
    }

    public function laporandana()
    {
        return view('bendahara.laporandana');
    }

}
