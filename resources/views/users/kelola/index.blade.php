@extends('layout.master')

@section('content')
    <div id="wrapper">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-4">Kelola User HMSI</h2>
            </div>
            <div class="col-md-6">
                <button class="btn btn-warning float-right" data-toggle="modal" data-target="#tambahUserModal">
                    Tambah User
                </button>
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </div>
        <div id="content-wrapper" class="d-flex flex-column">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-sm-flex justify-content-between align-items-center">
                    <h2 class="m-0">List User</h2>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="col">No.</th>
                                <th class="col">Username</th>
                                <th class="col">Email</th>
                                <th class="col">Role</th>
                                <th class="col">Tanggal Dibuat</th>
                                <th class="col-action text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td class="col">{{ $loop->index + 1 }}</td>
                                    <td class="col">{{ $user->name }}</td>
                                    <td class="col">{{ $user->email }}</td>
                                    <td class="col">{{ $user->roles->pluck('name')->implode(', ') }}</td>
                                    <td class="col">{{ $user->created_at }}</td>
                                    <td class="col text-center">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
                                            data-target="#ModalEdit{{ $user->id }}">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>
                                        @include('users.kelola.edit', [
                                            'user' => $user,
                                            'roles' => $roles,
                                            'userRole' => $user->roles->pluck('id')->toArray(),
                                        ])
                                        <form action="{{ route('deleteUser', $user->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this item?');">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
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

    <!-- Tambah User Modal -->
    <div class="modal fade" id="tambahUserModal" tabindex="-1" role="dialog" aria-labelledby="tambahUserModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('simpanUser') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahUserModalLabel">Tambah User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="password_confirmation"
                                name="password_confirmation" required>
                        </div>
                        <div class="form-group">
                            <label for="roles">Roles</label>
                            <select class="form-control select2" id="roles" name="roles[]">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
