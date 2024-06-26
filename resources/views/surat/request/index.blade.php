@extends('layout.master')

@section('content')
<div id="wrapper">
    <div class="row">
        <div class="col-md-6">
            <h2 class="mb-4">Request Surat Divisi HMSI</h2>
        </div>
    </div>
    <div id="content-wrapper" class="d-flex flex-column">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-sm-flex justify-content-between align-items-center">
                <h2 class="m-0">List Request Surat</h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="col-no">No.</th>
                            <th class="col-no">Divisi</th>
                            <th class="col-no">Kepada</th>
                            <th class="col-no">Perihal</th>
                            <th class="col-prioritas">Prioritas</th>
                            <th class="col-waktu">Waktu</th>
                            <th class="col-tanggal">Tempat</th>
                            <th class="col-action text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-no">1</td>
                            <td class="col-no">Eksternal</td>
                            <td class="col-no">HIMA IF Unand</td>
                            <td class="col-no">Undangan Kunjungan</td>
                            <td class="col-prioritas"><span class="badge badge-danger">Urgent</span></td>
                            <td class="col-waktu">20/02/2024</td>
                            <td class="col-tanggal">PKM FTI</td>
                            <td class="col-action">
                                <button type="button" class="btn btn-warning"><i class="bi bi-pencil-fill"></i> Edit</button>
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