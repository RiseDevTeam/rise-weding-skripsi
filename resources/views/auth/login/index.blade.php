<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('user_page/template/public/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('user_page/template/public/css/form-signin.css') }}" />
    <link rel="stylesheet" href="{{ asset('user_page/template/public/css/bootstrap.min.css') }}" />
    <script src="{{ asset('user_page/template/public/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('user_page/template/public/js/popper.min.js') }}" defer></script>

    <title>Form Sign In</title>
</head>

<body>
    @include('sweetalert::alert')
    <!-- Form Signin -->
    <section class="form">
        <img src="{{ asset('user_page/template/public/img/daun1.png') }}" alt="bg-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 form-isi">
                    <h3>Welcome Back</h3>
                    <p>Enter Your Email And Password To Sign In</p>
                    <form method="POST" class="mx-auto" action="{{ route('proses_login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" autofocus
                                required />
                            <div id="validationEmail" class="invalid-feedback"></div>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password"
                                required />
                            <div id="validationPassword" class="invalid-feedback"></div>
                        </div>

                        <div class="bsi mb-3">
                            <button type="submit" class="btn">
                                Sign In
                            </button>
                        </div>
                    </form>


                    <div class="bsiwg mb-4">
                        <a href="{{ route('google.login') }}" class="btn">
                            Sign In With Google
                        </a>
                    </div>
                    <div class="bm">
                        <a href="{{ route('register') }}" class="btn">
                            Ingin Menjadi Mitra ?
                            <br>
                            Klik Disini !
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">

                </div>
            </div>
        </div>
    </section>
    <!-- End Form Signin -->
</body>

</html>
