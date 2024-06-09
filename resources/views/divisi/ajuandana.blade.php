@extends('layout.masterdiv')

@section('content')
    <div id="wrapper">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-4">Ajuan Dana</h2>
            </div>
            <div class="col-md-6">
                <button type="button" class="btn btn-warning float-right" data-toggle="modal" data-target="#ajuanModal">
                    Tambah Ajuan
                </button>
            </div>
        </div>
        <div id="content-wrapper" class="d-flex flex-column">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-sm-flex justify-content-between align-items-center">
                    <h2 class="m-0">List Ajuan</h2>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="col">No.</th>
                                <th class="col">Tanggal Ajuan</th>
                                <th class="col">Nama Dana</th>
                                <th class="col">Jumlah Dana</th>
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
<div class="modal fade" id="ajuanModal" tabindex="-1" aria-labelledby="ajuanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ajuanModalLabel">Tambah Ajuan Dana</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="nama-dana">Nama Dana</label>
                            <input type="text" class="form-control" id="nama-dana">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="total-pengeluaran">Total Pengeluaran</label>
                            <input type="text" class="form-control" id="total pengeluaran">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tanggal-nota">Tanggal Nota</label>
                            <input type="date" class="form-control" id="tanggal-nota">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi-dana">Deskripsi Dana</label>
                        <textarea class="form-control no-resize" id="deskripsi-dana" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="upload-nota">Upload Nota</label>
                        <input type="file" class="form-control" id="upload-nota">
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Ajuan</button>
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
