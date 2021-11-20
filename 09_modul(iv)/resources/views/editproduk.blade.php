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
    <h1 style="color:blueviolet;margin-top:5rem">Edit Produk</h1>

    <div class="card" style="background-color: plum">
    <form action="/editproduk/{{ $data->id }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" name="nama" id="" value="{{ $data->nama }}"required aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Stok</label>
            <input type="text" class="form-control" name="stok"value="{{ $data->stok }}" id="" required aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Kategori</label>
            <select class="form-select" name="kategori" id="">

              <option>Pilih Model</option>
              @foreach($kat as $kategori)


              <option value="{{ $kategori->nm }}">{{ $kategori->nm }}</option>
              @endforeach

            </select>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Stok</label>
            <input type="text" class="form-control" name="stok" id="" value="{{ $data->stok }}"required aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Prosesor</label>
            <input type="text" class="form-control" name="prosesor"value="{{ $data->prosesor }}" id="" required aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Ram</label>
            <input type="text" class="form-control" name="ram" id="" value="{{ $data->ram }}"required aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Ukuran Layar</label>
            <input type="text" class="form-control" name="ukuranlayar" value="{{ $data->ukuranlayar }}"id="" required aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Warna</label>
            <input type="text" class="form-control" name="warna"value="{{ $data->warna }}" id="" required aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Harga</label>
            <input type="text" class="form-control" name="harga" id=""value="{{ $data->harga }}" required aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">gambar</label>
            <img src="{{ asset('img/'.$data->gambar) }}" alt="" style="width: 40px;">
            <input type="file" class="form-control" name="gambar" id=""required aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
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
