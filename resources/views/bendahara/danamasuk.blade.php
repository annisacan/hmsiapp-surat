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
                                <th class="col-action text-center">No.</th>
                                <th class="col-action text-center">Perihal</th>
                                <th class="col-action text-center">Divisi</th>
                                <th class="col-action text-center">Status</th>
                                <th class="col-action text-center">Tanggal Diterima</th>
                                <th class="col-action text-center">Dokumen</th>
                                <th class="col-action text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ajuans as $ajuan)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $ajuan->nama_dana }}</td>
                                <td class="text-center">{{ $ajuan->divisi ?? 'N/A' }}</td>
                                <td class="text-center"><span class="status-badge {{ strtolower(str_replace(' ', '-', $ajuan->status ?? 'menunggu')) }}">
                                    {{ $ajuan->status ?? 'Menunggu' }}
                                </span></td>
                                <td class="text-center">{{ $ajuan->created_at->format('Y-m-d') }}</td>
                                <td class="text-center">
                                    @if($ajuan->upload_nota)
                                        <form action="{{ asset('storage/uploads/' . $ajuan->upload_nota) }}" method="GET" target="_blank" style="display: inline;">
                                            <button type="submit" class="btn btn-info btn-sm">Detail</button>
                                        </form>
                                    @else
                                        No Document
                                    @endif
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#updateModal{{ $ajuan->id }}">Update</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Update -->
    @foreach($ajuans as $ajuan)
    <div class="modal fade" id="updateModal{{ $ajuan->id }}" tabindex="-1" aria-labelledby="updateModalLabel{{ $ajuan->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateModalLabel{{ $ajuan->id }}">Detail Ajuan Dana</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Modal Body Content Here -->
                    <form action="{{ isset($ajuan->id) ? route('update.ajuan', $ajuan->id) : route('store.ajuan') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(isset($ajuan->id))
                            @method('PUT')
                        @endif
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header text-white" style="background-color: #F8B739;">
                                        Status Surat
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="detail-deskripsi-dana">Deskripsi Dana</label>
                                            <textarea class="form-control no-resize" id="detail-deskripsi-dana{{ $ajuan->id }}" rows="5" readonly>{{ $ajuan->deskripsi_dana ?? '' }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="detail-status">Status</label>
                                            <select class="form-control" id="detail-status{{ $ajuan->id }}" name="status">
                                                <option {{ $ajuan->status == 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
                                                <option {{ $ajuan->status == 'Diterima' ? 'selected' : '' }}>Diterima</option>
                                                <option {{ $ajuan->status == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="buktiGantiDana{{ $ajuan->id }}">Bukti Ganti Dana</label>
                                            <input type="file" class="form-control" id="buktiGantiDana{{ $ajuan->id }}" name="bukti_ganti_dana">
                                        </div>
                                        <label class="col-form-label">Komentar</label>
                                        <div class="form-group row">
                                            <div class="col">
                                                <textarea class="form-control no-resize" rows="3" id="komentar{{ $ajuan->id }}" name="komentar">{{ $ajuan->updateBendahara->komentar ?? '' }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">{{ isset($ajuan->id) ? 'Update' : 'Tambah' }} Ajuan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach



@endsection

<style>
.modal-content {
    background-color: #f8f9fa; /* Warna latar belakang modal */
}

.modal-header {
    background-color: #F8B739; /* Warna latar belakang header modal */
    color: white; /* Warna teks header modal */
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
    document.addEventListener('DOMContentLoaded', function () {
        @foreach($ajuans as $ajuan)
        var fileInput{{ $ajuan->id }} = document.getElementById('buktiGantiDana{{ $ajuan->id }}');

        // Display the previously uploaded file name
        var previouslyUploadedFileName{{ $ajuan->id }} = '{{ $ajuan->updateBendahara->bukti_ganti_dana ?? '' }}'; // Ganti dengan field yang sesuai dari database Anda
        if (previouslyUploadedFileName{{ $ajuan->id }}) {
            var dataTransfer{{ $ajuan->id }} = new DataTransfer();
            var file{{ $ajuan->id }} = new File([''], previouslyUploadedFileName{{ $ajuan->id }});
            dataTransfer{{ $ajuan->id }}.items.add(file{{ $ajuan->id }});
            fileInput{{ $ajuan->id }}.files = dataTransfer{{ $ajuan->id }}.files;
        }

        // Update file input display when a new file is selected
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







