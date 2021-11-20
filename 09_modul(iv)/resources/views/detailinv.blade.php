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

                <th>Order</th>
                <th>TotalOrder</th>
                <th>Total Harga</th>
                <th>Rekening</th>
                <th>Bukti Bayar</th>




            </tr>
        </thead>
        <tbody style="color: blueviolet;background-color:skyblue">



            <tr>

                <td>{{ $order->order }}</td>
                <td>{{ $order->totalorder }}</td>
                <td>{{ $order->totalharga }}</td>
                <td>{{ $order->rekening }}</td>
                <td><img src="{{ asset('img/'.$order->bukti) }}" alt=""></td>

            </tr>


        </tbody>
    </table>

    </div>
</body>
</html>
@endsection
