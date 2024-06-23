@extends('layout.auth')

@section('content')
    <div class="row align-items-center">
        <div class="header-text mb-4">
            <h2>Hello,Again</h2>
            <p>Kembali lagi dengan himpunan</p>
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('login') }}" method="POST">
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
            <div class="input-group mb-4">
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
            <div class="input-group mb-3 d-flex justify-content-between">
                {{-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck">
                    <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                </div> --}}
                <div class="forgot">
                    <small><a href="{{ route('password.request') }}">Forgot Password?</a></small>
                </div>
                <small><a href="{{ route('register') }}">belum memiliki akun anggota?</a></small>
            </div>
            <div class="input-group mb-3">
                <button type="submit" class="btn btn-lg btn-dark w-100 fs-6">Login</button>
            </div>
        </form>

    </div>
@endsection
