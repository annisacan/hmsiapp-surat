<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Surat HMSI</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
        background: #FE9410;
    }

    /*------------ Login container ------------*/

    .box-area {
        width: 930px;
    }

    /*------------ Right box ------------*/

    .right-box {
        padding: 40px 30px 40px 40px;
    }

    /*------------ Custom Placeholder ------------*/

    ::placeholder {
        font-size: 16px;
    }

    .rounded-4 {
        border-radius: 20px;
    }

    .rounded-5 {
        border-radius: 30px;
    }


    /*------------ For small screens------------*/

    @media only screen and (max-width: 768px) {

        .box-area {
            margin: 0 10px;

        }

        .left-box {
            height: 100px;
            overflow: hidden;
        }

        .right-box {
            padding: 20px;
        }

    }
</style>

<body>
    
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background: #ffffff;">
                <div class="featured-image mb-3">
                    <img src="{{ asset('storage/hmsi.png') }}" class="img-fluid" style="width: 350px;">
                </div>
                <p class="text-black fs-2" style="font-weight: 600;">
                    HMSI SURAT</p>
                <small class="text-black text-wrap text-center" style="width: 17rem">HMSI jaya jaya jaya
                    jaya</small>
            </div>
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Reset your Password!</h2>
                    </div>
                
                    <form action="{{ url('reset-password') }}" method="POST">
                        @csrf
                
                        <input type="hidden" name="token" value="{{$request->token}}">
                
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
                        <div class="input-group mb-3">
                            <button type="submit" class="btn btn-lg btn-dark w-100 fs-6">Reset Password</button>
                        </div>
                    </form>
                
                </div>
            </div>
        </div>
    </div>
</body>

</html>

