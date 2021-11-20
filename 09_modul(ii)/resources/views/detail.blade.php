@extends('layout.depan')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail|HappaiShop</title>
</head>
<body>
    <div class="container">
        <div class="dis" style="max-width:80rem; background-color:plum;border-radius:15px;margin-top:5rem;">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('img/1.jpeg') }}" alt="" style="width:500rem;margin-top:1rem;margin-left:1rem;" class="img-fluid rounded start">
                </div>
                <div class="col-md-8">
                        <div class="card-body" style="margin-top:1rem">
                            <h1 class="card-title" style="color:blueviolet;text-align:center;">Laptop HP</h1>
                          <table class="table" style="width: 500px;margin-top:1rem;">
                              <tbody style="color:slateblue;border-color:thistle">
                                  <tr>
                                      <td scope="row">Kategori</td>
                                      <td>:</td>
                                      <td>Laptop</td>
                                  </tr>
                                  <tr>
                                      <td scope="row">Stok</td>
                                      <td>:</td>
                                      <td>5</td>
                                  </tr>
                                  <tr>
                                    <td scope="row">Spesifikasi</td>
                                    <td>:</td>
                                    <td><ul><li></li><li></li><li></li></ul></td>
                                </tr>
                                <tr>
                                    <td>Warna</td>
                                    <td>:</td>
                                    <td>White</td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td>:</td>
                                    <td><button class="btn btn-sm" style="background-color:blueviolet;border-radius:150px;color:white">Rp.5000.000</button></td>
                                </tr>

                              </tbody>
                          </table>

                        </div>
                    </div>

                </div>

            </div>
            <a href="" class="btn" style="margin-top:1rem;background-color: sandybrown;color:white;float:right;padding-right:2rem;">checkout</a>
                    <a href="" class="btn" style="margin-top:1rem;background-color:seagreen;color:white;float:right;padding-right:2rem;"><img src="{{ asset('img/a.png') }}" alt="" style="width:30px;"></a>

         </div>
    </div>
</body>
</html>
@endsection
