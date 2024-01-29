<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KON - Daftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" href="{{ asset('kon/aset/KON-hitam.png') }}">
    <link rel="stylesheet" href="{{ asset('kon/login/css/style.css') }}">
  </head>
  <body>
    <div class="wrapper-register">
        <div class="logo-register">
            <img src="{{ asset('kon/aset/KON-putih.jpg') }}" alt="">
        </div>
        <div class="text-center mt-4 name">
            KON
        </div>
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
        <p class="text-center">Keep On Nutrion</p>
        @if ($errors->any())
            <div class="alert alert-danger">
                <span class="alert-inner--text"><strong>Gagal !</strong>  
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('username_ada'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span class="alert-inner--text"><strong>Gagal !</strong>  
                <br>
                {{ session('username_ada') }}</span>
            </div>
          
        @endif
        
        <form action="{{url('proses_daftar')}}" method="post">
            @csrf
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" maxlength="30" name="nama" id="nama" placeholder="Nama">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="text" maxlength="100"  name="alamat" id="alamat" placeholder="Alamat">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="text" maxlength="13" name="no_hp" id="notelp" placeholder="No Telp">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" maxlength="30" name="username" id="userName" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" maxlength="30" name="password" id="pwd" placeholder="Password">
            </div>
            
            <button class="btn mt-3">Daftar</button>
        </form>
        <div class="text-center fs-6" style="margin-top: 12px;">
            <a href="{{ route('login') }}" >Login</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>