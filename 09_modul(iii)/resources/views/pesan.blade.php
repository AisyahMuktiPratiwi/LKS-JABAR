@extends('layout.depan')
@section('content')
  <div class="container">

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

    </div>
    <h1>terimakasih telah Melakukan Pemesanan</h1>
@endsection
