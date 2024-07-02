<?php

namespace App\Http\Controllers;

use App\Models\AjuanDana;
use App\Models\KirimSurat;
use App\Models\RequestSurat;
use Illuminate\Http\Request;

class SuratDivController extends Controller
{
    public function reqsurat()
    {
        $requests = RequestSurat::all();
        return view('divisi.reqsurat', compact('requests'));
    }

    public function ajuandana()
    {
        $ajuans = AjuanDana::all();
        return view('divisi.ajuandana', compact('ajuans'));
    }

    public function kirimsurat()
    {
        return view('divisi.kirimsurat');
    }

    public function arsipsurat()
    {
        return view('divisi.arsipsurat');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_surat' => 'required',
            'priority' => 'required',
            'tanggal_request' => 'required|date_format:Y-m-d\TH:i',
            'deskripsi_surat' => 'required',
            'tipe_surat' => 'required',
            'penerima_surat' => 'required',
        ]);


        RequestSurat::create([
            'nama_surat' => $request->nama_surat,
            'priority' => $request->priority,
            'tanggal_request' => $request->tanggal_request,
            'deskripsi_surat' => $request->deskripsi_surat,
            'tipe_surat' => $request->tipe_surat,
            'penerima_surat' => $request->penerima_surat,
        ]);

        return redirect()->back()->with('success', 'Request surat berhasil ditambahkan.');
    }

    public function storeAjuan(Request $request)
    {
        $request->validate([
            'nama_dana' => 'required',
            'total_pengeluaran' => 'required|numeric',
            'tanggal_nota' => 'required|date',
            'deskripsi_dana' => 'required',
            'upload_nota' => 'file|mimes:jpeg,png,jpg,pdf|max:2048',
        ]);

        $originalFilename = null; // Initialize variable to store original filename

        if ($request->hasFile('upload_nota')) {
            $file = $request->file('upload_nota');
            $uniqueFilename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('uploads', $uniqueFilename, 'public'); // Store file with unique filename

            $originalFilename = $file->getClientOriginalName(); // Get original filename
        }

        // Create new record with original filename
        $ajuan = AjuanDana::create([
            'nama_dana' => $request->nama_dana,
            'total_pengeluaran' => $request->total_pengeluaran,
            'tanggal_nota' => $request->tanggal_nota,
            'deskripsi_dana' => $request->deskripsi_dana,
            'upload_nota' => $uniqueFilename, // Store unique filename in database
            'status' => 'Menunggu',
            'original_filename' => $originalFilename, // Store original filename in database
        ]);

        return redirect()->back()->with('success', 'Ajuan dana berhasil ditambahkan.');
    }



    public function storeKirimSurat(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama_surat' => 'required|string|max:255',
            'pengirim_surat' => 'required|string|max:255',
            'waktu_kegiatan' => 'required|date',
            'nama_kegiatan' => 'required|string|max:255',
            'deskripsi_surat' => 'required|string',
            'upload_surat' => 'required|file|mimes:pdf,jpg,png,jpeg|max:2048',
        ]);

        // Simpan file surat jika ada
        $filePath = null;
        if ($request->hasFile('upload_surat')) {
            $filePath = $request->file('upload_surat')->store('surats');
        }

        // Simpan data ke database
        KirimSurat::create([
            'nama_surat' => $request->nama_surat,
            'pengirim_surat' => $request->pengirim_surat,
            'waktu_kegiatan' => $request->waktu_kegiatan,
            'nama_kegiatan' => $request->nama_kegiatan,
            'deskripsi_surat' => $request->deskripsi_surat,
            'upload_surat' => $filePath,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Data telah sukses dikirim');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_surat' => 'required|string',
            'priority' => 'required|in:Urgent,Soon,Not Urgent',
            'tanggal_request' => 'required|date_format:Y-m-d\TH:i',
            'deskripsi_surat' => 'nullable|string',
            'tipe_surat' => 'required|in:Surat Undangan,Surat Peminjaman,Surat Kunjungan',
            'penerima_surat' => 'nullable|string',
        ]);

        $requestSurat = RequestSurat::findOrFail($id);
        $requestSurat->update($validatedData);

        return redirect()->back()->with('success', 'Request successfully updated.');
    }

    public function updateAjuan(Request $request, $id)
    {
        $ajuan = AjuanDana::find($id);

        if ($request->hasFile('upload_nota')) {
            $file = $request->file('upload_nota');
            $uniqueFilename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('uploads', $uniqueFilename);

            // Save both filenames
            $ajuan->upload_nota = $uniqueFilename;
            $ajuan->original_filename = $file->getClientOriginalName();
        }

        $ajuan->nama_dana = $request->input('nama_dana');
        $ajuan->total_pengeluaran = $request->input('total_pengeluaran');
        $ajuan->tanggal_nota = $request->input('tanggal_nota');
        $ajuan->deskripsi_dana = $request->input('deskripsi_dana');

        $ajuan->save();

        return redirect()->back()->with('success', 'Request successfully updated.');
    }

    public function edit($id)
    {
        $ajuan = AjuanDana::find($id);
        return view('edit', ['ajuan' => $ajuan]);
    }

    public function destroy($id)
    {
        // Lakukan validasi atau pengecekan ajuan berdasarkan $id
        $ajuan = AjuanDana::findOrFail($id);

        // Lakukan penghapusan ajuan
        $ajuan->delete();

        // Redirect atau return response yang sesuai
        return redirect()->back()->with('success', 'Request successfully updated.');
    }

    public function destroySurat($id)
    {
        $requestSurat = RequestSurat::findOrFail($id);
        $requestSurat->delete();

        return redirect()->back()->with('success', 'Request successfully updated.');
    }


}
