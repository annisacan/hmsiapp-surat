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
                            @foreach($ajuans as $ajuan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $ajuan->updated_at->format('Y-m-d') }}</td>
                                <td>{{ $ajuan->nama_dana }}</td>
                                <td>{{ $ajuan->total_pengeluaran }}</td>
                                <td><span class="status-badge {{ strtolower(str_replace(' ', '-', $ajuan->status ?? 'menunggu')) }}">
                                    {{ $ajuan->status ?? 'Menunggu' }}
                                </span></td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-info btn-sm btn-detail" data-toggle="modal" data-target="#detailModal{{ $ajuan->id }}">Detail</a>
                                    <a href="#" class="btn btn-primary btn-sm btn-edit" data-toggle="modal" data-target="#editModal{{ $ajuan->id }}">Edit</a>
                                    <form action="{{ route('ajuan.destroy', $ajuan->id) }}" method="POST" style="display: inline-block;">
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
                <form action="{{ route('ajuan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="nama-dana">Nama Dana</label>
                            <input type="text" class="form-control" id="nama-dana" name="nama_dana" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="total-pengeluaran">Total Pengeluaran</label>
                            <input type="text" class="form-control" id="total pengeluaran" name="total_pengeluaran" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tanggal-nota">Tanggal Nota</label>
                            <input type="date" class="form-control" id="tanggal-nota" name="tanggal_nota" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi-dana">Deskripsi Dana</label>
                        <textarea class="form-control no-resize" id="deskripsi-dana" name="deskripsi_dana" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="upload-nota">Upload Nota</label>
                        <input type="file" class="form-control" id="upload-nota" name="upload_nota">
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

<!-- Modal Edit -->
@foreach($ajuans as $ajuan)
<div class="modal fade" id="editModal{{ $ajuan->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $ajuan->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ $ajuan->id }}">Edit Ajuan Dana</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('ajuan.update', $ajuan->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="edit-nama-dana">Nama Dana</label>
                            <input type="text" class="form-control" id="edit-nama-dana{{ $ajuan->id }}" name="nama_dana" value="{{ $ajuan->nama_dana }}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="edit-total-pengeluaran">Total Pengeluaran</label>
                            <input type="text" class="form-control" id="edit-total-pengeluaran{{ $ajuan->id }}" name="total_pengeluaran" value="{{ str_replace(',', '', substr($ajuan->total_pengeluaran, 2)) }}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="edit-tanggal-nota">Tanggal Nota</label>
                            <input type="date" class="form-control" id="edit-tanggal-nota{{ $ajuan->id }}" name="tanggal_nota" value="{{ $ajuan->tanggal_nota }}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit-deskripsi-dana">Deskripsi Dana</label>
                        <textarea class="form-control no-resize" id="edit-deskripsi-dana{{ $ajuan->id }}" name="deskripsi_dana" rows="5" required>{{ $ajuan->deskripsi_dana }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="edit-upload-nota">Upload Nota</label>
                        <input type="file" class="form-control" id="edit-upload-nota{{ $ajuan->id }}" name="upload_nota">
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Edit Ajuan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

<!-- Modal Detail -->
@foreach($ajuans as $ajuan)
<div class="modal fade" id="detailModal{{ $ajuan->id }}" tabindex="-1" aria-labelledby="detailModalLabel{{ $ajuan->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel{{ $ajuan->id }}">Detail Ajuan Dana</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="detail-nama-dana">Nama Dana</label>
                            <input type="text" class="form-control" id="detail-nama-dana{{ $ajuan->id }}" value="{{ $ajuan->nama_dana }}" readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="detail-total-pengeluaran">Total Pengeluaran</label>
                            <input type="text" class="form-control" id="detail-total-pengeluaran{{ $ajuan->id }}" value="{{ $ajuan->total_pengeluaran }}" readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="detail-tanggal-nota">Tanggal Nota</label>
                            <input type="date" class="form-control" id="detail-tanggal-nota{{ $ajuan->id }}" value="{{ $ajuan->tanggal_nota }}" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="detail-deskripsi-dana">Deskripsi Dana</label>
                        <textarea class="form-control no-resize" id="detail-deskripsi-dana{{ $ajuan->id }}" rows="5" readonly>{{ $ajuan->deskripsi_dana }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="detail-upload-nota">Upload Nota</label>
                        <input type="text" class="form-control" id="detail-upload-nota{{ $ajuan->id }}" value="{{ $ajuan->original_filename ?? '' }}" readonly>
                    </div>
                    <!-- Card untuk Status Dana -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center" style="background-color: #F8B739;">
                            <h6 class="m-0">Status Dana</h6>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <span class="status-badge {{ strtolower(str_replace(' ', '-', $ajuan->status ?? 'menunggu')) }}">
                                        {{ $ajuan->status ?? 'Menunggu' }}
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Bukti Ganti Dana</label>
                                <div class="col-sm-9">
                                    @if ($ajuan->updateBendahara && $ajuan->updateBendahara->bukti_ganti_dana != 'no_file_uploaded')
                                        <a href="{{ asset(Storage::url('app/public/uploads/' . $ajuan->updateBendahara->bukti_ganti_dana)) }}" target="_blank">Lihat Bukti</a>
                                    @else
                                        <span class="text-muted">File belum dikirim</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Komentar</label>
                                <div class="col-sm-9">
                                    @if ($ajuan->updateBendahara && $ajuan->updateBendahara->komentar != 'No comment provided')
                                        <textarea class="form-control no-resize" rows="3" readonly>{{$ajuan->updateBendahara->komentar}}</textarea>
                                    @else
                                        <span class="text-muted">Komentar belum diberikan</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach



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

.status-badge {
    display: inline-block;
    padding: 5px 10px;
    font-size: 14px;
    color: #000; /* Warna teks */
    border-radius: 15px; /* Membuat sudut membulat */
}

.status-badge.ditolak {
    background-color: #ffcce0; /* Warna pink untuk Ditolak */
}

.status-badge.menunggu {
    background-color: #ffe6b3; /* Warna kuning untuk Belum dibaca */
}

.status-badge.diterima {
    background-color: #ccffcc; /* Warna hijau untuk Diterima */
}

</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var editButtons = document.querySelectorAll('.btn-edit');
        editButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var ajuanId = this.getAttribute('data-target').replace('#editModal', '');
                var totalPengeluaranInput = document.getElementById('edit-total-pengeluaran' + ajuanId);
                totalPengeluaranInput.value = totalPengeluaranInput.value.replace(/[^0-9]/g, '');
            });
        });

        var editForms = document.querySelectorAll('form[action*="ajuan/update"]');
        editForms.forEach(function(form) {
            form.addEventListener('submit', function(e) {
                var ajuanId = this.getAttribute('action').split('/').pop();
                var totalPengeluaranInput = document.getElementById('edit-total-pengeluaran' + ajuanId);
                totalPengeluaranInput.value = totalPengeluaranInput.value.replace(/[^0-9]/g, '');
            });
        });
    });


</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        @foreach($ajuans as $ajuan)
        var fileInput{{ $ajuan->id }} = document.getElementById('edit-upload-nota{{ $ajuan->id }}');

        // Display the previously uploaded file name
        var previouslyUploadedFileName{{ $ajuan->id }} = '{{ $ajuan->original_filename ?? '' }}'; // Ganti dengan nama kolom yang sesuai di database Anda
        if (previouslyUploadedFileName{{ $ajuan->id }}) {
            var dataTransfer{{ $ajuan->id }} = new DataTransfer();
            var file{{ $ajuan->id }} = new File([''], previouslyUploadedFileName{{ $ajuan->id }});
            dataTransfer{{ $ajuan->id }}.items.add(file{{ $ajuan->id }});
            fileInput{{ $ajuan->id }}.files = dataTransfer{{ $ajuan->id }}.files;
        }

        // Update the file input display when a new file is selected
        fileInput{{ $ajuan->id }}.addEventListener('change', function (event) {
            var input{{ $ajuan->id }} = event.target;
            if (input{{ $ajuan->id }}.files.length > 0) {
                var fileName{{ $ajuan->id }} = input{{ $ajuan->id }}.files[0].name;
                // Simulate the selected file
                var dataTransfer{{ $ajuan->id }} = new DataTransfer();
                var file{{ $ajuan->id }} = new File([''], fileName{{ $ajuan->id }});
                dataTransfer{{ $ajuan->id }}.items.add(file{{ $ajuan->id }});
                input{{ $ajuan->id }}.files = dataTransfer{{ $ajuan->id }}.files;
            }
        });
        @endforeach
    });
</script>
@endsection
