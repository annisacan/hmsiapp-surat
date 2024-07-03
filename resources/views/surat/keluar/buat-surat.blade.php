@extends('layout.master')

@section('content')
<div id="wrapper">
    <div class="row">
        <div class="col-md-6">
            <h2 class="mb-4">Buat Surat</h2>
        </div>
    </div>
    <div class="container-fluid px-4">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs" id="jenisSuratTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="suratPermohonan-tab" data-bs-toggle="tab" href="#suratPermohonan" role="tab"
                                aria-controls="suratPermohonan" aria-selected="false">Surat Permohonan</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="undanganRapat-tab" data-bs-toggle="tab" href="#undanganRapat" role="tab"
                                aria-controls="undanganRapat" aria-selected="false">Undangan Pertemuan</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="suratPeminjaman-tab" data-bs-toggle="tab" href="#suratPeminjaman" role="tab"
                                aria-controls="suratPeminjaman" aria-selected="false">Surat Peminjaman</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="jenisSuratTabsContent">
                        <div class="tab-pane fade show active" id="suratPermohonan" role="tabpanel" aria-labelledby="suratPermohonan-tab">
                            <!-- Isi untuk Jenis Surat Permohonan -->
                            @include('forms.form-surat-permohonan')
                        </div>
                        <div class="tab-pane fade" id="undanganRapat" role="tabpanel" aria-labelledby="undanganRapat-tab">
                            <!-- Isi untuk Jenis Undangan Rapat -->
                            @include('forms.form-undangan-rapat')
                        </div>
                        <div class="tab-pane fade" id="suratPeminjaman" role="tabpanel" aria-labelledby="suratPeminjaman-tab">
                            <!-- Isi untuk Jenis Surat Peminjaman -->
                            @include('forms.form-surat-peminjaman')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Kustom CSS -->
<style>
    .modal-content {
        background-color: #f8f9fa;
        /* Warna latar belakang modal */
    }

    .modal-header {
        background-color: #F8B739;
        /* Warna latar belakang header modal */
        color: white;
        /* Warna teks header modal */
    }

    .modal-footer {
        background-color: #343a40;
        /* Warna latar belakang footer modal */
    }

    .no-resize {
        resize: none;
        /* Mencegah perubahan ukuran elemen textarea */
    }
</style>
@endsection

@push('addon-style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.1.1/dist/select2-bootstrap-5-theme.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet" href="path/to/your/custom/style.css" />
    <!-- Tambahkan link style tambahan jika diperlukan -->
    <!-- ... -->
@endpush

@push('addon-script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="path/to/your/custom/script.js"></script>
    <!-- Tambahkan script tambahan jika diperlukan -->
    <!-- ... -->
@endpush