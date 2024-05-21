@extends('layout.master')

@section('content')
    <div id="wrapper">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-4">Arsip Surat HMSI</h2>
            </div>
            <div class="col-md-6">
                <a href="#" class="btn btn-warning float-right">
                    Tambah request
                </a>
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
                                <th class="col-tanggal">Tanggal Surat</th>
                                <th class="col-nama">Nama Surat</th>
                                <th class="col-status">Status</th>
                                <th class="col-action text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="col-no">1</td>
                                <td class="col-tanggal">12/02/2024</td>
                                <td class="col-nama">Surat Undangan</td>
                                <td class="col-waktu">20/02/2024</td>
                                <td class="col-status">not finished</td>
                                <td class="col-action">
                                    <button type="button" class="btn btn-outline-dark"> <i class="bi bi-eye-fill"></i> Detail</button>
                                    <button type="button" class="btn btn-warning"><i class="bi bi-pencil-fill"></i></button>
                                    <button type="button" class="btn btn-danger"id="btn-delete"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
