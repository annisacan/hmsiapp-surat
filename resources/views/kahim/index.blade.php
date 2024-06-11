@extends('layout.master')

@section('content')
<div id="wrapper">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-4">Surat Masuk Kahim</h2>
            </div>
            <div class="col-md-6">
                <a href="{{ route('requestCreate') }}" class="btn btn-warning float-right">
                    Tambah User
                </a>
            </div>
        </div>
        <div id="content-wrapper" class="d-flex flex-column">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-sm-flex justify-content-between align-items-center">
                    <h2 class="m-0">List Surat</h2>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="col">No.</th>
                                <th class="col">Perihal</th>
                                <th class="col">Divisi</th>
                                <th class="col">Status</th>
                                <th class="col">Diterima Tanggal</th>
                                <th class="col-action text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="col">1</td>
                                <td class="col">Disposisi Pencairan Dana SI Fun</td>
                                <td class="col"><span class="badge badge-primary">Internal</span></td>
                                <td class="col"><span class="badge badge-primary">Menunggu</span></td>
                                <td class="col">20/02/2024</td>
                                <td class="col-action">
                                    <button type="button" class="btn btn-warning"><i class="bi bi-pencil-fill"></i> Edit</button>
                                    <button type="button" class="btn btn-danger"id="btn-delete"><i class="bi bi-trash"></i> Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection