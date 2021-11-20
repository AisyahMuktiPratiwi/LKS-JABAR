@extends('layout.template')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DataProduk|HappaiShop</title>
</head>
<body>
    <div class="container">
        <h1 style="color:blueviolet;margin-top:5rem;">Data Produk</h1>
    <a href="/tmbhproduk" class="btn btn-primary" style="margin-bottom:2rem;">+produk</a>
    <table class="table">
        <thead style="background-color: blueviolet;color:white">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Prosesor</th>
                <th>Ram</th>
                <th>Ukuran Layar</th>
                <th>Warna</th>
                <th>Harga</th>
                <th>gambar</th>
                <th colspan="2">Aksi</th>

            </tr>
        </thead>
        <tbody style="color: blueviolet;background-color:skyblue">
            @php
                $no=1;
            @endphp
            @foreach($data as $row)


            <tr>
                <td scope="row">{{$no++ }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->kategori }}</td>
                <td>{{ $row->stok }}</td>
                <td>{{ $row->prosesor }}</td>
                <td>{{ $row->ram }}</td>
                <td>{{ $row->ukuranlayar }}</td>
                <td>{{ $row->warna }}</td>
                <td>{{ $row->harga }}</td>
                <td><img src="{{ asset('img/'.$row->gambar) }}" alt="" width="40px"></td>
                <td><a href="/tampildata/{{ $row->id }}" class="btn btn-warning"> Edit</a></td>
                <td><a href="/delete/{{ $row->id }}" class="btn btn-danger"> Hapus</a></td>
            </tr>

            @endforeach
        </tbody>
    </table>

    </div>
</body>
</html>
@endsection
