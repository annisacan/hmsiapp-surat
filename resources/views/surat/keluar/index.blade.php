@extends('layout.master')

@section('content')
<div id="wrapper">
    <div class="row">
        <div class="col-md-6">
            <h2 class="mb-4">Surat Keluar</h2>
        </div>
    </div>
    <div id="content-wrapper" class="d-flex flex-column">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-sm-flex justify-content-between align-items-center">
                <h2 class="m-0">List Surat Keluar</h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="col-no">No.</th>
                            <th class="col-no">Divisi</th>
                            <th class="col-no">No Surat</th>
                            <th class="col-no">Kepada</th>
                            <th class="col-no">Perihal</th>
                            <th class="col-action text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-no">1</td>
                            <td class="col-no">Eksternal</td>
                            <td class="col-no">001/b/U/KI/HMSI/II/2024</th>
                            <td class="col-no">HIMA IF Unand</th>
                            <td class="col-no">Undangan Kunjungan</th>
                            <td class="col-action">
                                <button type="button" class="btn btn-warning"><i class="bi bi-pencil-fill"></i> Show</button>
                                <button type="button" class="btn btn-danger" id="btn-delete"><i class="bi bi-trash"></i> Delete</button>
                                <button type="button" class="btn btn-info" id="btn-delete"><i class="bi bi-trash"></i> Send</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection