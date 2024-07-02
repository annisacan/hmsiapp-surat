@extends('layout.master')

@section('content')
    <div id="wrapper">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-4">Laporan Dana</h2>
            </div>
            {{-- apakah disini ada tambah dana? --}}
        </div>
        disini ada search

        <div id="content-wrapper" class="d-flex flex-column">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="col">No.</th>
                                <th class="col">Divisi</th>
                                <th class="col">Perihal</th>
                                <th class="col">Tanggal Surat</th>
                                <th class="col">Dana</th>
                                <th class="col-action text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                {{-- isi tabel --}}
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
