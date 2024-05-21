@extends('layout.master')

@section('content')
    <h1>Tambah Request Surat</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="namaRequest">Nama request</label>
                <input type="text" class="form-control" name="namaRequest">
            </div>
            <div class="form-group">
                <label for="jenisRequest">Jenis Surat</label>
                <select type="text" class="form-control" name="jenisRequest">
                    <option value="Surat Undangan"> Surat Undangan</option>
                    <option value="Surat Perizinan"> Surat Perizinan</option>
                    <option value="Surat Peminjaman"> Surat Peminjaman</option>
                </select>
            </div>
        </div>

        <p>Ceritanya udah siap</p>
    </div>
@endsection
