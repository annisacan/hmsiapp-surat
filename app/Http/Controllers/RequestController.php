<?php

namespace App\Http\Controllers;

use App\Models\RequestSurat;
use Illuminate\Http\Request;

class RequestController extends Controller
{

    //
    public function index()
    {
        return view('surat.request.create');
    }

    public function requestsurat()
    {
        $requests = RequestSurat::all();
        return view('surat.request.index', compact('requests'));
    }
    
    public function update(Request $request, $id)
{
    // Validasi data
    $validatedData = $request->validate([
        'deskripsi_surat' => 'required|string',
        'status' => 'required|in:Finished,Unfinished',
        'upload_surat' => 'nullable|file|mimes:pdf,doc,docx', // optional validation for file types and size
    ]);

    // Temukan data request surat berdasarkan ID
    $requestSurat = RequestSurat::findOrFail($id);

    // Update data dari request
    $requestSurat->deskripsi_surat = $validatedData['deskripsi_surat'];
    $requestSurat->status = $validatedData['status'];

    // Proses upload surat jika ada
    if ($request->hasFile('upload_surat')) {
        $uploadedFile = $request->file('upload_surat');
        $fileName = time() . '_' . $uploadedFile->getClientOriginalName();
        $uploadedFile->storeAs('uploads', $fileName, 'public');
        // Simpan nama file ke dalam atribut upload_surat
        $requestSurat->upload_surat = $fileName;
    }

    // Simpan perubahan ke database
    $requestSurat->save();

    // Redirect kembali dengan pesan sukses
    return redirect()->back()->with('success', 'Request surat berhasil diperbarui!');
}

        


}
