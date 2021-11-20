@extends('layout.depan')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout|HappaiShop</title>
</head>
<body>
    <div class="container">
        <h1 style="color:blueviolet;text-align:center;margin-top:5rem;">Form Pembayaran</h1>
        <form action="" method="" enctype="multipart/form-data" style="color:blueviolet">
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                      <label for="" class="form-label">Nama</label>
                      <input type="text" class="form-control" name="" id="" value="" required aria-describedby="emailHelpId" placeholder="" style="border-color:blue">

                    </div>


                    <div class="mb-3">
                      <label for="" class="form-label">No HP</label>
                      <input type="text" class="form-control" name="" id=""  required aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
                    </div>

                <div class="mb-3">
                  <label for="" class="form-label">Metode Pembayaran</label>
                  <select class="form-control" name="" id="" required style="border-color:blueviolet">
                    <option></option>
                    <option></option>
                  </select>
                </div>

                    <div class="mb-3">
                      <label for="" class="form-label">Order</label>
                      <input type="text" class="form-control" name="" id=""  value ="" readonly aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Harga</label>
                        <input type="text" class="form-control" name="" id=""  value ="" readonly aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
                      </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="text" class="form-control" name="" id="" value="" required aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
                  </div>
                <div class="mb-3">
                    <label for="" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="" id=""  required aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Rekening</label>
                    <input type="text" class="form-control" name="" id=""  value ="" required aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Total Order</label>
                    <input type="text" class="form-control" name="" id=""  value ="" readonly aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Bukti Bayar</label>
                    <input type="file" class="form-control" name="" id=""  readonly aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
                  </div>
                  <button class="btn" style="background-color: blueviolet;color:white">Pesan</button>
            </div>
            </div>
        </form>
    </div>

</body>
</html>
@endsection
