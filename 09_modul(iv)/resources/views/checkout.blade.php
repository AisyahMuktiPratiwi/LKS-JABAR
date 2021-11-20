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
        <form action="/pembayaran" method="POST" enctype="multipart/form-data" style="color:blueviolet">
            @csrf
            @php $total = 0 @endphp
            @if(session('cart'))
            @foreach(session('cart') as $id => $details)
            @php $total += $details['harga'] * $details['quantity'] @endphp
            <tr >
            <div class="row"data-id="{{ $id }}">
                <div class="col-6">
                    <div class="mb-3">
                      <label for="" class="form-label">Nama</label>
                      <input type="text" class="form-control" name="name" id="" value="{{ Auth::user()->name }}" required aria-describedby="emailHelpId" placeholder="" style="border-color:blue">

                    </div>


                    <div class="mb-3">
                      <label for="" class="form-label">No HP</label>
                      <input type="text" class="form-control" name="nohp" id=""  required aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
                    </div>

                <div class="mb-3">
                  <label for="" class="form-label">Metode Pembayaran</label>
                  <select class="form-select" name="metodepembayaran" id="" required style="border-color:blueviolet">
                    <option>COD</option>
                    <option>Transfer Bank</option>
                  </select>
                </div>

                    <div class="mb-3">
                      <label for="" class="form-label">Order</label>
                      <input type="text" class="form-control" name="order" id=""  value ="{{ $details['nama'] }}" readonly aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Total Harga</label>
                        <input type="text" class="form-control" name="totalharga" id=""  value ="{{ $total }}" readonly aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
                      </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="" value="{{ Auth::user()->email }}" required aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
                  </div>
                <div class="mb-3">
                    <label for="" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id=""  required aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Rekening</label>
                    <input type="text" class="form-control" name="rekening" id=""  value =""  aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Total Order</label>
                    <input type="text" class="form-control" name="totalorder" id=""  value ="{{ $details['quantity'] }}" readonly aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
                  </div>
                  @endforeach
            @endif
                  <div class="mb-3">
                    <label for="" class="form-label">Bukti Bayar</label>
                    <input type="file" class="form-control" name="" id=""  readonly aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Kode Unik</label>
                    <input type="text" class="form-control" name="kodeunik" id=""  value ="{{ $nomer}}" readonly aria-describedby="emailHelpId" placeholder="" style="border-color:blue">
                  </div>
                  <button class="btn" style="background-color: blueviolet;color:white">Pesan</button>
            </div>
            </div>
        </form>
    </div>
    @endsection

    @section('scripts')
    <script rel="javascript" type="text/javascript" href="js/jquery-1.11.3.min.js" />
    $(".update-cart").change(function(e) {
    e.preventDefault();

    var ele = $(this);

    $.ajax({
    url: "{{ route('update.cart') }}",
    method: "patch",
    data: {
    _token: '{{ csrf_token() }}',
    id: ele.parents("tr").attr("data-id"),
    quantity: ele.parents("tr").find(".quantity").val()
    },
    success: function(response) {
    window.location.reload();
    }
    });
    });


    </script>
</body>
</html>
@endsection
