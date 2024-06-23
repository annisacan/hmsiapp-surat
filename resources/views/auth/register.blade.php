@extends('layout.auth')

@section('content')
    <div class="row align-items-center">
        <div class="header-text mb-4">
            <h2>Hello</h2>
            <p>Ayo bikin akun anggota himpunan</p>
        </div>

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <input type="email" class="form-control form-control-lg bg-light fs-6 @error('email') is-invalid @enderror"
                    value="{{ old('email') }}" placeholder="Email address" name="email" required>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control form-control-lg bg-light fs-6 @error('name') is-invalid @enderror"
                    value="{{ old('name') }}" value="name" placeholder="User Name" name="name" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input type="password"
                    class="form-control form-control-lg bg-light fs-6 @error('name') is-invalid @enderror"
                    value="{{ old('password') }}" placeholder="Password" name="password" autocomplete="new-password"
                    required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Confirm Password"
                    autocomplete="new-password" name="password_confirmation" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-group mb-3 d-flex justify-content-between">
                <small><a href="{{ route('login') }}">sudah memiliki akun?</a></small>
            </div>

            <div class="input-group mb-3">
                <button type="submit" class="btn btn-lg btn-dark w-100 fs-6">Register</button>
            </div>
        </form>

    </div>
@endsection
