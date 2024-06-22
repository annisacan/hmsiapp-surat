@extends('layout.master')

@section('content')
<div id="wrapper">
    <div class="row">
        <div class="col-md-6">
            <h2 class="mb-4">Surat Masuk Divisi HMSI</h2>
        </div>
    </div>
    <div id="content-wrapper" class="d-flex flex-column">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-sm-flex justify-content-between align-items-center">
                <h2 class="m-0">List Surat Masuk</h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="col-no">No.</th>
                            <th class="col-no">Tanggal Diterima</th>
                            <th class="col-no">Instansi</th>
                            <th class="col-no">Perihal</th>
                            <th class="col-action text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-no">1</td>
                            <td class="col-waktu">20/02/2024</td>
                            <td class="col-no">BEM KM Unand</td>
                            <td class="col-no">Peminjaman Stop Kontak</td>
                            <td class="col-action">
                                <button type="button" class="btn btn-warning"><i class="bi bi-pencil-fill"></i> Show</button>
                                <button type="button" class="btn btn-danger" id="btn-delete"><i class="bi bi-trash"></i> Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection