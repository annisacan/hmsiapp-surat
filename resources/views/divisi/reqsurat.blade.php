@extends('layout.masterdiv')

@section('content')
<div id="wrapper">
    <div class="row">
        <div class="col-md-6">
            <h2 class="mb-4">Request Surat</h2>
        </div>
        <div class="col-md-6">
            <button type="button" class="btn btn-warning float-right" data-toggle="modal" data-target="#requestModal">
                Tambah request
            </button>
        </div>
    </div>
    <div id="content-wrapper" class="d-flex flex-column">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-sm-flex justify-content-between align-items-center">
                <h2 class="m-0">List Request</h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="col">No.</th>
                            <th class="col">Tanggal Request</th>
                            <th class="col">Nama Surat</th>
                            <th class="col">Priority</th>
                            <th class="col">Waktu</th>
                            <th class="col">Status</th>
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

<!-- Modal -->
<div class="modal fade" id="requestModal" tabindex="-1" aria-labelledby="requestModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="requestModalLabel">Tambah Request Surat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="nama-surat">Nama Surat</label>
                            <input type="text" class="form-control" id="nama-surat">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="priority">Prioritas</label>
                            <select class="form-control" id="priority">
                                <option>Urgent</option>
                                <option>Soon</option>
                                <option>Not Urgent</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tanggal-request">Waktu Pelaksanaan</label>
                            <input type="date" class="form-control" id="tanggal-request">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi-surat">Deskripsi Surat</label>
                        <textarea class="form-control no-resize" id="deskripsi-surat" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tipe-surat">Tipe Surat</label>
                        <select class="form-control" id="tipe-surat">
                            <option>Surat Undangan</option>
                            <option>Surat Peminjaman</option>
                            <option>Surat Kunjungan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="penerima-surat">Penerima Surat</label>
                        <input type="text" class="form-control" id="penerima-surat">
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Request</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Kustom CSS -->
<style>
.modal-content {
    background-color: #f8f9fa; /* Warna latar belakang modal */
}

.modal-header {
    background-color: #F8B739; /* Warna latar belakang header modal */
    color: white; /* Warna teks header modal */
}

.modal-footer {
    background-color: #343a40; /* Warna latar belakang footer modal */
}

.no-resize {
    resize: none; /* Mencegah perubahan ukuran elemen textarea */
}

</style>
@endsection


