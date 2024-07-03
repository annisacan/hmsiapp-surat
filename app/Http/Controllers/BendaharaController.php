<?php

namespace App\Http\Controllers;

use App\Models\AjuanDana;
use App\Models\updateBendahara;
use Illuminate\Http\Request;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;



class BendaharaController extends Controller
{
    public function danamasuk()
    {
        $ajuans = AjuanDana::all();
        return view('bendahara.danamasuk', compact('ajuans'));
    }

    public function laporandana()
    {
        $ajuans = AjuanDana::all();
        return view('bendahara.laporandana', compact('ajuans'));
    }

    public function update(Request $request, $id)
    {
        // Validate form inputs
        $ajuan = $request->validate([
            'status' => 'required|in:Menunggu,Diterima,Ditolak',
            'bukti_ganti_dana' => 'nullable|file|max:2048', // Maximum file size 2MB
            'komentar' => 'nullable|string|max:255',
        ]);

        // Find the specific 'ajuan' record
        $ajuan = AjuanDana::findOrFail($id);
        $ajuan->status = $request->status;

        // Check if an 'updateBendahara' record exists for this 'ajuan'
        $updateBendahara = updateBendahara::where('ajuan_dana_id', $ajuan->id)->first();

        if (!$updateBendahara) {
            // Create a new 'updateBendahara' record if it doesn't exist
            $updateBendahara = new updateBendahara();
            $updateBendahara->ajuan_dana_id = $ajuan->id;
            // Set a placeholder value indicating that no file has been uploaded yet
            $updateBendahara->bukti_ganti_dana = 'no_file_uploaded';
            // Set a placeholder value indicating that no comment has been provided yet
            $updateBendahara->komentar = 'No comment provided';
        }

        // Handle file upload if a file is uploaded
        if ($request->hasFile('bukti_ganti_dana')) {
            // Store the file and get the filename
            $file = $request->file('bukti_ganti_dana');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('uploads', $fileName, 'public');
            $updateBendahara->bukti_ganti_dana = $fileName;
        }

        // Update the comments if provided, otherwise keep the placeholder
        if ($request->filled('komentar')) {
            $updateBendahara->komentar = $request->input('komentar');
        }

        $updateBendahara->save();

        // Save the updated 'ajuan' record
        $ajuan->save();

        return redirect()->back()->with('success', 'Data ajuan berhasil diupdate');
    }
}
