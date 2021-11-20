<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>HappaiShop|Login</title>
</head>

<body style="background-color: lavender;">


    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card text-white" style="border-radius: 1rem; background-color:plum">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                    <p class="text-white-50 mb-5">Sillahkan Login</p>


                                    <div class="form-outline form-white mb-4">
                                        <input type="email" name="email" id="typeEmailX" placeholder="Email" class="form-control form-control-lg" required />

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" name="password" id="typePasswordX" placeholder="Password" class="form-control form-control-lg" required />
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>




                                    <button class="btn btn-outline-light btn-lg px-5" type="submit" style="float: right;">Register</button>



                            </div>

                            <div>
                                <p class="mb-0">Belum Punya Akun? <a href="{{ route('register') }}" class="text-white-50 fw-bold">regis</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    {{ asset('bootstrap-5.0.2-dist/js/bootstrap.min.js') }}
</body>

</html>

































