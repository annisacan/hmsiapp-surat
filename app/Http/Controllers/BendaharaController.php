<?php

namespace App\Http\Controllers;
use App\Models\AjuanDana;

use Illuminate\Http\Request;

class BendaharaController extends Controller
{
    public function danamasuk()
    {
        $ajuans = AjuanDana::all();
        return view('bendahara.danamasuk', compact('ajuans'));
    }

    public function laporandana()
    {
        return view('bendahara.laporandana');
    }

}
