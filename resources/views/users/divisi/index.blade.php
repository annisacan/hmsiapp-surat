@extends('layout.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h3 class="mb-4">Kelola Role HMSI</h3>
            </div>
            <div class="col-md-6">
                <a href="{{ route('createDivisi') }}" class="btn btn-warning float-right">
                    Tambah Divisi
                </a>
            </div>
        </div>
        <div id="content-wrapper" class="d-flex flex-column">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-sm-flex justify-content-between align-items-center">
                    <h4 class="m-0">List User</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="col">No.</th>
                                    <th class="col">Nama Ketua</th>
                                    <th class="col">Jabatan/Divisi</th>
                                    {{-- <th class="col">Tanggal Dibuat</th> --}}
                                    <th class="col-action text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($divisi as $div)
                                    <tr>
                                        <td class="col">{{ $loop->index + 1 }}</td>
                                        <td class="col">{{ $div->name }}</td>
                                        <td class="col">{{ $div->role }}</td>
                                        {{-- <td class="col">{{}}</td> --}}
                                        <td class="col-action">
                                            <div class="float-left mx-1">
                                                <a href="{{ route('editDivisi', $div->id) }}" class="btn btn-warning">
                                                    <i class='bx bxs-edit'></i>
                                                </a>
                                            </div>
                                            <div class="float-left mx-1">
                                                <form action="{{ route('hapusDivisi', $div->id) }}" method="POST">
                                                    @csrf
                                                    <button class="btn btn-danger">
                                                        <i class='bx bxs-trash'></i>
                                                    </button>
                                                </form>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
