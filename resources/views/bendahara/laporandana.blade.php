@extends('layout.master')

@section('content')
    <div id="wrapper">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-4">Laporan Dana</h2>
            </div>
            {{-- apakah disini ada tambah dana? --}}
        </div>

        <div id="content-wrapper" class="d-flex flex-column">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="col text-center">No.</th>
                                <th class="col text-center">Divisi</th>
                                <th class="col text-center">Perihal</th>
                                <th class="col text-center">Tanggal Ajuan</th>
                                <th class="col text-center">Dana</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ajuans as $ajuan)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $ajuan->divisi ?? 'N/A' }}</td>
                                <td class="text-center">{{ $ajuan->nama_dana }}</td>
                                <td class="text-center">{{ $ajuan->created_at->format('Y-m-d') }}</td>
                                <td class="text-center">{{ $ajuan->total_pengeluaran }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
