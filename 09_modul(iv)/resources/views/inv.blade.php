@extends('layout.template')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>datainv|HappaiShop</title>
</head>
<body>
    <div class="container">
        <h1 style="color:blueviolet;margin-top:5rem;">Data invoice</h1>
    <a href="/tmbhproduk" class="btn btn-primary" style="margin-bottom:2rem;">+produk</a>
    <table class="table">
        <thead style="background-color: blueviolet;color:white">
            <tr>

                <th>kode unik</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>NOHp</th>
                <th>MetodeBayar</th>



            </tr>
        </thead>
        <tbody style="color: blueviolet;background-color:skyblue">
            @php
                $no=1;
            @endphp
            @foreach($order as $row)


            <tr>
                <td scope="row"><a href="/detailinv/{{ $row->id }}">{{ $row->kodeunik }}</a></td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->alamat }}</td>
                <td>{{ $row->nohp }}</td>
                <td>{{ $row->metodepembayaran }}</td>

            </tr>

            @endforeach
        </tbody>
    </table>

    </div>
</body>
</html>
@endsection
