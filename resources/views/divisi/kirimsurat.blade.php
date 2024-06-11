@extends('layout.masterdiv')

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
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="nama-surat">Nama Surat</label>
                                <input type="text" class="form-control" id="nama-surat">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="pengirim-surat">Pengirim Surat</label>
                                <input type="text" class="form-control" id="pengirim surat">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="waktu-kegiatan">Waktu Kegiatan</label>
                                <input type="date" class="form-control" id="waktu-kegiatan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama-kegiatan">Nama Kegiatan</label>
                            <input type="text" class="form-control" id="deskripsi-dana" rows="5"></input>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi-dana">Deskripsi Surat</label>
                            <textarea class="form-control no-resize" id="deskripsi-dana" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="upload-nota">Upload Nota</label>
                            <input type="file" class="form-control" id="upload-nota">
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
