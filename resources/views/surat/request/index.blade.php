@extends('layout.master')

@section('content')
<div id="wrapper">
    <div class="row">
        <div class="col-md-6">
            <h2 class="mb-4">Request Surat Divisi HMSI</h2>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>
    <div id="content-wrapper" class="d-flex flex-column">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-sm-flex justify-content-between align-items-center">
                <h2 class="m-0">List Request Surat</h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="col-no text-center">No.</th>
                            <th class="col-no text-center">Kepada</th>
                            <th class="col-no text-center">Perihal</th>
                            <th class="col-prioritas text-center">Prioritas</th>
                            <th class="col-waktu text-center">Waktu</th>
                            <th class="col-action text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($requests as $request)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $request->penerima_surat }}</td>
                            <td class="text-center">{{ $request->nama_surat }}</td>
                            <td class="text-center">
                                <span class="priority-badge {{ strtolower(str_replace(' ', '-', $request->priority)) }}">{{ $request->priority }}</span>
                            </td>
                            <td class="text-center">{{ \Carbon\Carbon::parse($request->tanggal_request)->format('Y-m-d H:i') }}</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-info btn-sm btn-detail" data-toggle="modal" data-target="#detailModal{{ $request->id }}">Detail</a>
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#updateModal{{ $request->id }}">Update</button>
                                <form action="{{ route('request-surat.destroy', $request->id) }}" method="POST" style="display: inline-block;">
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

<!-- Modal Detail -->
@foreach($requests as $request)
<div class="modal fade" id="detailModal{{ $request->id }}" tabindex="-1" aria-labelledby="detailModalLabel{{ $request->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel{{ $request->id }}">Detail Request Surat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="detail-nama-surat">Nama Surat</label>
                            <input type="text" class="form-control" id="detail-nama-surat{{ $request->id }}" name="nama_surat" value="{{ $request->nama_surat }}" readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="detail-priority">Prioritas</label>
                            <select class="form-control" id="detail-priority{{ $request->id }}" name="priority" disabled>
                                <option {{ $request->priority == 'Urgent' ? 'selected' : '' }}>Urgent</option>
                                <option {{ $request->priority == 'Soon' ? 'selected' : '' }}>Soon</option>
                                <option {{ $request->priority == 'Not Urgent' ? 'selected' : '' }}>Not Urgent</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="detail-tanggal-request">Waktu Pelaksanaan</label>
                            <input type="datetime-local" class="form-control" id="detail-tanggal-request{{ $request->id }}" name="tanggal_request" value="{{ \Carbon\Carbon::parse($request->tanggal_request)->format('Y-m-d\TH:i') }}" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="detail-tipe-surat">Tipe Surat</label>
                        <select class="form-control" id="detail-tipe-surat{{ $request->id }}" name="tipe_surat" disabled>
                            <option {{ $request->tipe_surat == 'Surat Undangan' ? 'selected' : '' }}>Surat Undangan</option>
                            <option {{ $request->tipe_surat == 'Surat Peminjaman' ? 'selected' : '' }}>Surat Peminjaman</option>
                            <option {{ $request->tipe_surat == 'Surat Kunjungan' ? 'selected' : '' }}>Surat Kunjungan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="detail-deskripsi-surat">Deskripsi Surat</label>
                        <textarea class="form-control no-resize" id="detail-deskripsi-surat{{ $request->id }}" rows="5" name="deskripsi_surat" readonly>{{ $request->deskripsi_surat }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="detail-penerima-surat">Penerima Surat</label>
                        <input type="text" class="form-control" id="detail-penerima-surat{{ $request->id }}" name="penerima_surat" value="{{ $request->penerima_surat }}" readonly>
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

<!-- Modal Update -->
@foreach($requests as $request)
    <div class="modal fade" id="updateModal{{ $request->id }}" tabindex="-1" aria-labelledby="updateModalLabel{{ $request->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateModalLabel{{ $request->id }}">Detail Ajuan Dana</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Modal Body Content Here -->
                    <form action="{{ route('request-status.update', $request->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT') <!-- Gunakan method PUT untuk update -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header text-white" style="background-color: #F8B739;">
                    Status Surat
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="detail-deskripsi-surat">Deskripsi Dana</label>
                        <textarea class="form-control no-resize" id="detail-deskripsi-surat" rows="5" name="deskripsi_surat" required>{{ $request->deskripsi_surat ?? '' }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="detail-status">Status</label>
                        <select class="form-control" id="detail-status" name="status" required>
                            <option value="Finished" {{ $request->status == 'Finished' ? 'selected' : '' }}>Finished</option>
                            <option value="Unfinished" {{ !$request->status || $request->status == 'Unfinished' ? 'selected' : '' }}>Unfinished</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="uploadSurat">Upload Surat</label>
                        <input type="file" class="form-control" id="uploadSurat" name="upload_surat">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>

                </div>
            </div>
        </div>
    </div>
    @endforeach