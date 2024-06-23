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
                            <th class="col-action text-center">No.</th>
                            <th class="col-action text-center">Tanggal Request</th>
                            <th class="col-action text-center">Nama Surat</th>
                            <th class="col-action text-center">Priority</th>
                            <th class="col-action text-center">Waktu</th>
                            <th class="col-action text-center">Status</th>
                            <th class="col-action text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($requests as $request)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $request->updated_at->format('Y-m-d') }}</td>
                                <td class="text-center">{{ $request->nama_surat }}</td>
                                <td class="text-center"><span class="priority-badge {{ strtolower($request->priority) }}">{{ $request->priority }}</span></td>
                                <td class="text-center">{{ \Carbon\Carbon::parse($request->tanggal_request)->format('Y-m-d H:i') }}</td>
                                <td class="text-center">{{ $request->status ?? 'Finished' }}</td> {{--diambil dari sekre--}}
                                <td class="text-center">
                                    <a href="#" class="btn btn-info btn-sm btn-detail" data-toggle="modal" data-target="#editModal{{ $request->id }}">Detail</a>
                                    <a href="#" class="btn btn-primary btn-sm btn-edit" data-toggle="modal" data-target="#editModal{{ $request->id }}">Edit</a>
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
                <form action="{{ route('request-surat.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="nama-surat">Nama Surat</label>
                            <input type="text" class="form-control" id="nama-surat" name="nama_surat">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="priority">Prioritas</label>
                            <select class="form-control" id="priority" name="priority">
                                <option>Urgent</option>
                                <option>Soon</option>
                                <option>Not Urgent</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tanggal-request">Waktu Pelaksanaan</label>
                            <input type="datetime-local" class="form-control" id="tanggal-request" name="tanggal_request">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi-surat">Deskripsi Surat</label>
                        <textarea class="form-control no-resize" id="deskripsi-surat" rows="5" name="deskripsi_surat"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tipe-surat">Tipe Surat</label>
                        <select class="form-control" id="tipe-surat" name="tipe_surat">
                            <option>Surat Undangan</option>
                            <option>Surat Peminjaman</option>
                            <option>Surat Kunjungan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="penerima-surat">Penerima Surat</label>
                        <input type="text" class="form-control" id="penerima-surat" name="penerima_surat">
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

@foreach($requests as $request)
    <!-- Modal Edit -->
    <div class="modal fade" id="editModal{{ $request->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $request->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel{{ $request->id }}">Edit Request Surat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('request-surat.update', $request->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="edit-nama-surat">Nama Surat</label>
                                <input type="text" class="form-control" id="edit-nama-surat" name="nama_surat" value="{{ $request->nama_surat }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="edit-priority">Prioritas</label>
                                <select class="form-control" id="edit-priority" name="priority">
                                    <option {{ $request->priority == 'Urgent' ? 'selected' : '' }}>Urgent</option>
                                    <option {{ $request->priority == 'Soon' ? 'selected' : '' }}>Soon</option>
                                    <option {{ $request->priority == 'Not Urgent' ? 'selected' : '' }}>Not Urgent</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="edit-tanggal-request">Waktu Pelaksanaan</label>
                                <input type="datetime-local" class="form-control" id="edit-tanggal-request" name="tanggal_request" value="{{ \Carbon\Carbon::parse($request->tanggal_request)->format('Y-m-d\TH:i') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="edit-deskripsi-surat">Deskripsi Surat</label>
                            <textarea class="form-control no-resize" id="edit-deskripsi-surat" rows="5" name="deskripsi_surat">{{ $request->deskripsi_surat }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="edit-tipe-surat">Tipe Surat</label>
                            <select class="form-control" id="edit-tipe-surat" name="tipe_surat">
                                <option {{ $request->tipe_surat == 'Surat Undangan' ? 'selected' : '' }}>Surat Undangan</option>
                                <option {{ $request->tipe_surat == 'Surat Peminjaman' ? 'selected' : '' }}>Surat Peminjaman</option>
                                <option {{ $request->tipe_surat == 'Surat Kunjungan' ? 'selected' : '' }}>Surat Kunjungan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="edit-penerima-surat">Penerima Surat</label>
                            <input type="text" class="form-control" id="edit-penerima-surat" name="penerima_surat" value="{{ $request->penerima_surat }}">
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Edit Request</button>
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


.priority-badge {
    display: inline-block;
    padding: 5px 10px;
    font-size: 14px;
    color: #000; /* Warna teks */
    border-radius: 15px; /* Membuat sudut membulat */
}

.priority-badge.urgent {
    background-color: #ffcce0; /* Warna pink untuk Urgent */
}

.priority-badge.soon {
    background-color: #ffe6b3; /* Warna kuning untuk Soon */
}

.priority-badge.not-urgent {
    background-color: #ccffcc; /* Warna hijau untuk Not Urgent */
}


</style>



@endsection


