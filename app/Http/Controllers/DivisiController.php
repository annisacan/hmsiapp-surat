<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    //
    public function index()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        
        $divisi = Divisi::all();
        // return $divisi;
        return view('users.divisi.index', compact('divisi'));
    }

    public function create()
    {
        return view('users.divisi.create');    
    }

    public function simpan(Request $request)
    {
        $messages = [
            'id_role.required' => 'Field divisi harus dipilih',
            'name.required' => 'Field nama harus diisi',
            'role.required' => 'Field nama divisi harus dipilih',
            // tambahkan pesan khusus untuk aturan validasi lain di sini jika diperlukan
        ];

        $request->validate([
            // 'id_role' => ['required'],
            // 'name' => ['required'],
            // 'role' => ['required'],
        ], $messages);
        
        Divisi::create([
            'user_id' => 1,
            'id_role' => $request->id_role,
            'name' => $request->name,
            'role' => $request->namediv,
        ]);

        return redirect()->route('KelolaDivisi');
    }

    public function edit($id)
    {
        $divisi = Divisi::find($id);
        //  return $divisi;

        return view('users.divisi.edit', compact('divisi'));
    }

    public function update(Request $request, $id)
    {
        Divisi::where('id',$id)->update([
            'id_role' => $request->id_role,
            'name' => $request->name,
            'role' => $request->namediv,
        ]);
        return redirect()->route('KelolaDivisi');
    }

    public function hapus($id)
    {
        Divisi::where ('id', $id)-> delete();
        return redirect()->route('KelolaDivisi');
    }
}
