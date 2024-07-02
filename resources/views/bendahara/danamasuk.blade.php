@extends('layout.master')

@section('content')
    <div id="wrapper">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-4">Dana Masuk</h2>
            </div>
            {{-- apakah disini ada tambah dana? --}}
        </div>
        <div id="content-wrapper" class="d-flex flex-column">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-sm-flex justify-content-between align-items-center">
                    <h2 class="m-0">List Dana</h2>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="col">No.</th>
                                <th class="col">Perihal</th>
                                <th class="col">Divisi</th>
                                <th class="col">Status</th>
                                <th class="col">Tanggal Diterima</th>
                                <th class="col">Dokumen</th>
                                <th class="col-action text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ajuans as $ajuan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $ajuan->nama_dana }}</td>
                                <td>{{ $ajuan->divisi ?? 'N/A' }}</td>
                                <td><span class="status-badge {{ strtolower(str_replace(' ', '-', $ajuan->status ?? 'ditolak')) }}">
                                    {{ $ajuan->status ?? 'Ditolak' }}
                                </span></td>
                                <td>{{ $ajuan->created_at->format('Y-m-d') }}</td>
                                <td>
                                    @if($ajuan->upload_nota)
                                        <a href="{{ Storage::url($ajuan->upload_nota) }}" target="_blank">View Document</a>
                                    @else
                                        No Document
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-info btn-sm">Detail</a>
                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="#" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
