<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.min.css') }}">
</head>
<body style="background-color: thistle">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: skyblue">
      <div class="container">
        <a class="navbar-brand" href="#" style="color:white;font-family:cursive"><img src="{{ asset('img/logo.png') }}" alt="" style="width:30px;height:24px;">HappaiShop</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0" style="margin-left: 30rem;">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><img src="{{ asset('img/log.png') }}" alt="" style="width:30px;height:24px;"><span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img src="{{ asset('img/e.png') }}" alt="" style="width:30px;height:24px;"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img src="{{ asset('img/a.png') }}" alt="" style="width:30px;height:24px;"></a>
                </li>

            </ul>
            <form id="logout-from" action="" method="">
                 <button class="btn" type="submit"><img src="{{ asset('img/f.png') }}" alt="" style="width:30px;height:24px;"></button>

                <button class="btn" type="submit" style="border-color:skyblue;color:skyblue">Search</button>
            </form>
        </div>
  </div>
</nav>

@yield('content')
<footer>
    <div class="row" style="background-color: skyblue;color:white; margin-top:13rem; padding-left:4rem; padding-top:3rem; ">
        <div class="col-3">
            <h1>Produk</h1>
            <p style="margin-top: 1rem">Produk Terbaru</p>
            <p>Produk Terbaik</p>
            <p>Produk Diskon</p>
        </div>
        <div class="col-3">
            <h1>Toko Kami</h1>
            <p style="margin-top: 1rem">HappaiShop</p>
            <p>Rekening:0908 8687 767</p>
            <p>Alamat:GunungPutr, Bogor</p>
        </div>
        <div class="col-3">
            <h1>Akun Anda</h1>
            <p style="margin-top: 1rem">Informasi Pribadi</p>
            <p>Pesanan</p>
            <p>Alamat</p>
        </div>
        <div class="col-3">
            <h1>Informasi Toko</h1>
            <p style="margin-top: 1rem">Tentang Kami</p>
            <p>Hubungi Kami</p>
            <p>Syarat Dan ketentuan Penggunaan</p>
        </div>
    </div>
    <footer style="background-color: lightblue;color:white;text-align:center">Copyright &copy; 2021-HappaiShop</footer>
</footer>

    <script src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
