@extends('layout.master')

@section('content')
    <div id="wrapper">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-4">Kirim Surat</h2>
            </div>
        </div>
        <div id="content-wrapper" class="d-flex flex-column">
            <div class="card shadow mb-4">
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <form action="{{ route('kirim-surat.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="nama-surat">Nama Surat</label>
                                <input type="text" class="form-control" id="nama-surat" name="nama_surat" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="pengirim-surat">Pengirim Surat</label>
                                <input type="text" class="form-control" id="pengirim surat" name="pengirim_surat" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="waktu-kegiatan">Waktu Kegiatan</label>
                                <input type="date" class="form-control" id="waktu-kegiatan" name="waktu_kegiatan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama-kegiatan">Nama Kegiatan</label>
                            <input type="text" class="form-control" id="nama-kegiatan" name="nama_kegiatan" required></input>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi-surat">Deskripsi Surat</label>
                            <textarea class="form-control no-resize" id="deskripsi-surat" name="deskripsi_surat" rows="5" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="upload-surat">Upload Surat</label>
                            <input type="file" class="form-control" id="upload-surat" name="upload_surat" required>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Kirim Surat</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
