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
                    <img src="{{ asset('img/'.$data->gambar) }}" alt="" style="width:500rem;margin-top:1rem;margin-left:1rem;" class="img-fluid rounded start">
                </div>
                <div class="col-md-8">
                        <div class="card-body" style="margin-top:1rem">
                            <h1 class="card-title" style="color:blueviolet;text-align:center;">{{ $data->nama }}</h1>
                          <table class="table" style="width: 500px;margin-top:1rem;">
                              <tbody style="color:slateblue;border-color:thistle">
                                  <tr>
                                      <td scope="row">Kategori</td>
                                      <td>:</td>
                                      <td>{{ $data->kategori }}</td>
                                  </tr>
                                  <tr>
                                      <td scope="row">Stok</td>
                                      <td>:</td>
                                      <td>{{ $data->stok }}</td>
                                  </tr>
                                  <tr>
                                    <td scope="row">Spesifikasi</td>
                                    <td>:</td>
                                    <td><ul><li>{{ $data->prosesor }}</li><li>{{ $data->ram }}</li><li>{{ $data->ukuranlayar }}</li></ul></td>
                                </tr>
                                <tr>
                                    <td>Warna</td>
                                    <td>:</td>
                                    <td>{{ $data->warna }}</td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td>:</td>
                                    <td><button class="btn btn-sm" style="background-color:blueviolet;border-radius:150px;color:white">Rp.{{ $data->harga }}</button></td>
                                </tr>

                              </tbody>
                          </table>

                        </div>
                    </div>

                </div>

            </div>
            <a href="/checkout" class="btn" style="margin-top:1rem;background-color: sandybrown;color:white;float:right;padding-right:2rem;">checkout</a>
                    <a href="{{ route('add.to.cart', $data->id) }}" class="btn" style="margin-top:1rem;background-color:seagreen;color:white;float:right;padding-right:2rem;"><img src="{{ asset('img/a.png') }}" alt="" style="width:30px;"></a>

         </div>
    </div>
</body>
</html>
@endsection
