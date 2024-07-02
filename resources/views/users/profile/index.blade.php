@extends('layout.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header py-3 d-sm-flex justify-content-between align-items-center">
                    <h3 style="color: #ffffff">Profile User</h3>
                </div>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="card-body">
                    <!-- Display User Avatar -->
                    <div class="form-group row">
                        <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Avatar') }}</label>
                        <div class="col-md-6">
                            @if (Auth::user()->avatar)
                                <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Avatar"
                                    class="img-thumbnail">
                            @else
                                <img src="{{ asset('storage/avatars/default-avatar.jpg') }}" alt="Default Avatar"
                                    class="img-thumbnail">
                            @endif
                        </div>
                        {{-- <div class="col-md-6">
                            @if (Auth::user()->avatar)
                                <img src="{{ asset('storage/avatars/' . Auth::user()->avatar) }}" alt="Avatar" class="img-thumbnail">
                            @else
                                <img src="{{ asset('storage/avatars/default-avatar.jpg') }}" alt="Default Avatar" class="img-thumbnail">
                            @endif
                        </div> --}}
                    </div>

                    <div class="form-group row">
                        <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>
                        <div class="col-md-6">
                            <p class="form-control-static">{{ Auth::user()->name }}</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                        <div class="col-md-6">
                            <p class="form-control-static">{{ Auth::user()->email }}</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="row">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#changePasswordModal">
                                    {{ __('Change Password') }}
                                </button>
                            </div>
                            <div class="row mt-2">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#changeInfoModal">
                                    {{ __('Change Information') }}
                                </button>
                            </div>
                            @include('users.profile.edit')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- 
<!-- Modal for Change Password -->
@include('users.profile.change-password')

<!-- Modal for Change Information -->
@include('users.profile.change-info') --}}
