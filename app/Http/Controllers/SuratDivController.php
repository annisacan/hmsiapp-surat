<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratDivController extends Controller
{
    public function reqsurat()
    {
        return view('divisi.reqsurat');
    }

    public function ajuandana()
    {
        return view('divisi.ajuandana');
    }

    public function kirimsurat()
    {
        return view('divisi.kirimsurat');
    }

    public function arsipsurat()
    {
        return view('divisi.arsipsurat');
    }
}
