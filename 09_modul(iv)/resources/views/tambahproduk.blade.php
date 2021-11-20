@extends('layout.template')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Produk|happaiShop</title>
</head>
<body>
<div class="container">
    <h1 style="color:blueviolet;margin-top:5rem">Tambah Produk</h1>

    <div class="card" style="background-color: plum">
    <form action="/tambahproduk" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" name="nama" id="" required aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Stok</label>
            <input type="text" class="form-control" name="stok" id="" required aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Kategori</label>
            <input type="text" class="form-control" name="kategori" id="" required aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Prosesor</label>
            <input type="text" class="form-control" name="prosesor" id="" required aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Ram</label>
            <input type="text" class="form-control" name="ram" id="" required aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Ukuran Layar</label>
            <input type="text" class="form-control" name="ukuranlayar" id="" required aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Warna</label>
            <input type="text" class="form-control" name="warna" id="" required aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Harga</label>
            <input type="text" class="form-control" name="harga" id="" required aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">gambar</label>
            <input type="file" class="form-control" name="gambar" id="" required aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
          </div>
          <button class="btn btn-primary">Simpan</button>
    </form>
</div>
</div>
<br>
    <br>
    <br>
</body>
</html>
@endsection
