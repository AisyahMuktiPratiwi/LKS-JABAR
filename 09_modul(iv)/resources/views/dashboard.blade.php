@extends('layout.template')
@section('content')

<div class="content-wrapper" style="background-color: lavender;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-4 mt-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="color: blueviolet;">Dashboard</h1>
                </div>
                <!-- /.col -->
                <div class=" col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="clearfix hidden-md-up"></div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box mb-3" style="background-color:blueviolet;">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-laptop" colo></i></span>

                        <div class="info-box-content" style="color: white;">
                            <span class="info-box-text">Produk</span>
                            <span class="info-box-number">6</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box mb-3" style="background-color:blueviolet;">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content" style="color: white;">
                            <span class="info-box-text">Pelangggan</span>
                            <span class="info-box-number">2,000</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-12 col-sm-6 col-md-4" style="color: white;">
                    <div class="info-box mb-3" style="background-color:blueviolet;">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-shopping-cart"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Pesanan</span>
                            <span class="info-box-number">5</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- /.col -->
            </div>
            <div class="box" style="background-color: white;border:1px solid blueviolet; height:20rem;	padding:1px;box-sizing: border-box;margin: 10px 0;">
                <h2 style="color:purple; margin-left: 20px; text-align:center; margin-top:5rem">Selamat datang DiHappaiSHop</h2>
            </div>

        </div>
    </section>

@endsection
