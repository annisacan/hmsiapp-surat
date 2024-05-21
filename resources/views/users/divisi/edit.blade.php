@extends('layout.master')

@section('content')
    <div class="container-fluid">
        <h3> Edit Divisi</h3>
        <form action="{{route ('updateDivisi', $divisi->id)}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" name="name" value="{{$divisi->name}}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="namediv">Nama Divisi</label>
                        <input type="text" class="form-control" name="namediv" value="{{$divisi->role}}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="id_role">Divisi</label>
                        <select name="id_role" class="form-control">
                            <option value="" selected> Pilih divisi</option>
                            <option value="1" @if($divisi->id_role == '1') selected @endif>Kahim</option>
                            <option value="2" @if($divisi->id_role == '2') selected @endif>Sekum</option>
                            <option value="3" @if($divisi->id_role == '3') selected @endif>Bendum</option>
                            <option value="4" @if($divisi->id_role == '4') selected @endif>Anggota</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success float-right">
                            Simpan Perubahan
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
