@extends('layout.master')

@section('content')
<div id="wrapper">
    <div class="row">
        <div class="col-md-6">
            <h2 class="mb-4">Arsip Surat</h2>
        </div>
    </div>
    <div id="content-wrapper" class="d-flex flex-column">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-sm-flex justify-content-between align-items-center">
                <h2 class="m-0">List Arsip Surat</h2>
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
                    @foreach($allSurat as $index => $surat)
                        <tr>
                            <td class="col-no">{{ $index + 1 }}</td>
                            <td class="col-no">{{ $surat->divisi ?? '-' }}</td>
                            <td class="col-no">{{ $surat->tujuan_surat ?? '-' }}</td>
                            <td class="col-no">{{ $surat->hal ?? '-' }}</td>
                            <td class="col-prioritas"><span class="badge badge-danger">Urgent</span></td>
                            <td class="col-waktu">{{ $surat->tanggal_acara ?? '-' }}</td>
                            <td class="col-tanggal">{{ $surat->tempat ?? '-' }}</td>
                            <td class="col-action">
                                <a href="#" class="btn btn-warning"><i class="bi bi-pencil-fill"></i> Download</a>
                                <form action="#" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</button>
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