<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KON - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('kon/aset/KON-hitam.png') }}">
    <link rel="stylesheet" href="{{ asset('kon/login/css/style.css') }}">
</head>
<body>
    <div class="wrapper">
        <script>
            window.onload = function() {
            let alertBox = document.querySelector('.alert');
            if (alertBox) {
                setTimeout(function() {
                    alertBox.style.display = "none";
                }, 5000);
            }
        }

        </script>
        {{-- Error Alert --}}
        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('error')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="logo">
            <img src="{{ asset('kon/aset/KON-putih.jpg') }}" alt="">
        </div>
        <div class="text-center mt-4 name">
            KON
        </div>
        <p class="text-center">Keep On Nutrition</p>
        <form class="p-3 mt-3" action="{{url('proses_login')}}" method="post">
            {{ csrf_field() }}
            @csrf
            @if (session('logout'))
                <div class="alert alert-success">
                    {{ session('logout') }}
                </div>
            @endif

            @if (session('login_gagal'))
                <div class="alert alert-danger">
                    {{ session('login_gagal') }}
                </div>
            @endif

            @if (session('daftar_berhasil'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span class="alert-inner--text"><strong>Berhasil !</strong>  
                    <br>
                    {{ session('daftar_berhasil') }}</span>
                </div>
            @endif




            <div class="form-field d-flex align-items-center">
                @error('login_gagal')
                    {{-- <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span> --}}
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{-- <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span> --}}
                    <span class="alert-inner--text"><strong>Warning!</strong>  {{ $message }}</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
            </div>
                 @enderror
                <span class="far fa-user"></span>
                <input type="text" name="username" id="userName" placeholder="Username">
                @if($errors->has('username'))
                    <span class="error">{{ $errors->first('username') }}</span>
                @endif
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
                @if($errors->has('password'))
                    <span class="error">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <button class="btn mt-3">Login</button>
        </form>
        <div class="text-center fs-6">
            <a href="{{ route('daftar') }}">Daftar</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
