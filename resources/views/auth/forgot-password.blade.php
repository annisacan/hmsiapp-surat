@extends('layout.auth')

@section('content')
    <div class="row align-items-center">
        <div class="header-text mb-4">
            <h2>Reset your Password</h2>

            @if(@session('status'))
            <div class="text-success">
                {{session('status')}}
            </div>
            @endif
        </div>
        <form action="{{ route('password.email') }}" method="POST">
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

            <div class="input-group mb-3 d-flex justify-content-between">
                <small><a href="{{ route('login') }}">back to login</a></small>
            </div>
            <div class="input-group mb-3">
                <button type="submit" class="btn btn-lg btn-dark w-100 fs-6">Reset Password</button>
            </div>
        </form>

    </div>
@endsection
