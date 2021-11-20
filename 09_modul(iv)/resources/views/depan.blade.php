@extends('layout.depan')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Depan|HppaiShop</title>
    <style>
        .section{
            padding:25px 0;
        }
        .container{
            width:80%;
            margin:0 auto;
        }
        .container:after{
            clear: both;
            display:block;
            content:"";
        }
        .col-5{
            width:20%;
            height:100%;
            float:left;
            box-sizing: border-box;
        }
        @media(min-width:768px){
            .etalase{
                width:auto;
                max-width: 50%;
                float:none;
                display:flex;
                flex-wrap: wrap;

            }
        }
    </style>
<body>
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="{{ asset('img/sl1.jpeg') }}" alt="First slide" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/sl2.jpeg') }}" alt="Second slide"class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/sl3.jpeg') }}" alt="Third slide"class="d-block w-100">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
    </div>


<nav class="navbar navbar-expand-lg navbar-light" style="background-color: skyblue">
      <div class="container">
        <a class="navbar-brand" href="#" style="color:skyblue">Navbar</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="color:white">Beranda <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"style="color:white">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"style="color:white">Kontak</a>
                </li>
            </ul>
            <form class="d-flex my-2 my-lg-0">
                <input class="form-control me-sm-2" type="text" placeholder="Search" name="">
                <button class="btn" type="submit"  value="" style="color:white;border-color:white">Search</button>
            </form>
        </div>
  </div>
</nav>
<div class="section">
    <div class="container">
        <div class="box">
            <div class="col-5">
            <img src="{{ asset('img/komputer.png') }}" alt="" style="width: 150px; margin-bottom:5px;">
        </div>
        <div class="col-5">
            <img src="{{ asset('img/laptop.png') }}" alt="" style="width: 150px; margin-bottom:5px;">
        </div>
        <div class="col-5">
            <img src="{{ asset('img/hp.png') }}" alt="" style="width: 150px; margin-bottom:5px;">
        </div>
        <div class="col-5">
            <img src="{{ asset('img/tv.png') }}" alt="" style="width: 150px; margin-bottom:5px;">
        </div>
        </div>
    </div>
</div>


<div class="container">
    <h1 style="color:blueviolet;margin-top:5rem;">Produk Kami</h1>
    <div class="row">
        @foreach ($data as  $row)


        <div class="etalase">
            <div class="col-4">
                <div class="card" style="background-color: lavender;width:18rem;margin-top:2rem;margin-bottom:2rem;margin-left:2rem;">
                    <img class="card-img-top" src="{{ asset('img/'.$row->gambar) }}" alt="" style="width:15rem;height:15rem;margin-top:1rem; margin-left:1rem;" >
                    <div class="card-body" style="margin-top:1rem;">
                        <h4 class="card-title" style="color:blueviolet">{{ $row->nama }}</h4>
                        <p class="card-text"><button class="btn btn-sm" style="color:white;background-color:blueviolet;margin-left:8rem;border-radius:150px;">Rp.{{ $row->harga }}</button></p>
                        <a href="/detail/{{ $row->id }}" class="btn" style="background-color:plum;color:white">Detail</a>
                        <a href="{{ route('add.to.cart', $row->id) }}" class="btn" style="background-color:seagreen;color:white"><img src="{{ asset('img/a.png') }}" alt="" width="30px;"></a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


<div class="container">
    <div class="dis" style="max-width:80rem; height:12rem; background-color:lightblue;border-radius:25px;border:15px dashed white;margin-top:5rem;">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('img/9.png') }}" alt="" style="width:500rem;margin-top:1rem;margin-left:1rem;" class="img-fluid rounded start">
            </div>
            <div class="col-md-8">
                    <div class="card-body" style="margin-top:1rem">
                        <h4 class="card-title" style="color:white;text-align:center;font-size:3rem;">Diskon 20% Smart Tv</h4>
                        <p class="card-text" style="text-align: center"><button class="btn" style="color:white;background-color:blueviolet;width:25rem;border-radius:150px;">Lihat Selengkapnya</button></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<div class="container">
    <div class="dis" style="max-width:80rem; background-color:lightblue;border-radius:25px;border:15px dashed thistle;margin-top:5rem;">
        <h1 style="color:blueviolet;text-align:center;margin-top:1rem;" > Paduan Belanja</h1>
        <p style="color:slateblue;font-size:20px;text-align:center;margin-top:1rem;" >Silahkan Ikuti Panduan Dibawah ini </p>
        <p style="color:slateblue;font-size:20px;text-align:center;margin-top:1rem;" >
        <ol style="color:slateblue;font-size:20px;margin-top:1rem;margin-left:10rem;padding-bottom:6rem;margin-right:8rem;">
            <li>
                Buat Akun(Silahkan buat akun terlebih dahulu deangn memasukan email, username dan password)

                </li>
                <li>
                    login(jika anda sudah membuat akun silahkan dapat login dengan memasukan email dan password)
                </li>
                <li>
                    Lihat Produk(Anda dapat memiih dan melihat produk pada etalase produk)
                </li>
                <li>
                    Detail Produk(Anda dapat melihat info lebih lengkapnya mengenai suatu produk dengan klik tombol detail)
                </li>
                <li>
                    Masukan Keranjang(Anda dapat menyimpan baranag yang diinginkan ke dalam keranjang dengan klik icon keranjang)
                </li>
                <li>
                    checkout(Jika anda sudah yakin dengan barang tersebut anda dapat membelinya dengan klik tombol checkout)
                </li>
                <li>
                    Konfirmasi Pembayaran(Anda di haruskan untuk konfirmasi pesanan dengan memasukan nama, metode pembayaran, rekening, aalamat dll)
                </li>
                <li>Tunggu Pesanan(jika anda telah mengikuti langkah langkah diatas anda hanya perlu menunggu pesanan datang)</li>
            </ol>
        </p>
    </div>
</div>

    </body>
</html>
@endsection
