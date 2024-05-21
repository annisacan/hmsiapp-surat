@extends('layout.master')

@section('content')
    <div class="container-fluid">
        <h3> Tambah Divisi Baru</h3>
        <form action="{{ route('simpanDivisi') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="namediv">Nama Divisi</label>
                        <input type="text" class="form-control" name="namediv">
                    </div>
                    @error('role')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="id_role">Divisi</label>
                        <select name="id_role" class="form-control">
                            <option value="" selected> Pilih divisi</option>
                            <option value="1">Kahim</option>
                            <option value="2">Sekum</option>
                            <option value="3">Bendum</option>
                            <option value="5">Anggota</option>
                        </select>
                    </div>
                    @error('id_role')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success float-right">
                            Tambah
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
