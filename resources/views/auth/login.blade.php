@section('title', 'Login')
<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <title>SentUs - @yield('title')</title>
    <link rel="icon" href="img/Logo.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/default-css.css">
    <link rel="stylesheet" type="text/css" href="css/metisMenu.css">
    <link rel="stylesheet" type="text/css" href="css/slicknav.min.css">

    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/typography.css">
    <link rel="stylesheet" href="css/default-css.css">
    <link rel="stylesheet" href="css/responsive.css">

    <style>
        ::-webkit-scrollbar {
            width: 8px;
            background-color: transparent !important;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #005c97 !important;
            background-color: -webkit-linear-gradient(to right, #005c97, #363795) !important;
            background-color: linear-gradient(to right, #005c97, #363795) !important;
            border-radius: 5px;
        }




        .main {
            font-family: "Nunito" !important;
            scroll-behavior: smooth !important;
            background-color: #005c97 !important;
            background-color: -webkit-linear-gradient(to right, #005c97, #363795) !important;
            background-color: linear-gradient(to right, #005c97, #363795) !important;
            width: auto;
            height: 100vh;
        }

        label {
            float: left !important;
            font-weight: bold;
        }

        .row {
            text-align: center !important;
            justify-content: center !important;

        }

        .card {
            width: 400px !important;
            height: 450px !important;
            position: absolute;
            justify-content: center !important;
            top: 11%;
        }

        .form-login {
            border-radius: 1rem;
        }

        .btn-login {
            color: white;
            font-weight: bold;
            background-color: #00337C;
            border-radius: 10px;
            border: 2px solid transparent;
            padding: 7px 0px !important;
            margin-top: 1rem;
        }

        .btn-login:hover {
            color: #00337C;
            background-color: white;
            border: 2px solid #00337C;
            /* height: 40px; */

        }

        .img-header {
            height: 45px;
            width: auto;
            /* position: absolute; */
            top: 18%;
            left: 27%;
            right: 25%
        }

        .login-form {
            position: relative;
            top: 35%;
            animation: form 10s;
        }

        .form-control {
            border-radius: 10px !important;
            border: 1px solid #00337C;
            text-align: center;
            font-family: "Nunito", sans-serif;
            font-size: 14px;
        }

        form {
            margin-top: 60px;
        }

        .login-header-img {
            margin-top: 50px;
        }

        label {
            color: #00337C !important;
        }

        @keyframes form {
            from {
                top: 0px;
            }

            to {
                bottom: 25%;
            }
        }

        .footer-text {
            font-family: "Nunito", sans-serif !important;
            font-size: 12px !important;
            font-weight: bold;
        }
    </style>

</head>

<body>
    <main class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="card shadow">
                    <div class="card-body card-login">
                        <div class="login-header-img">
                            <img src="img/Logo-panjang.png" class="img-header mb-5">
                        </div>
                        <div class="container">
                            <div class="row login-form">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <label for="Email" class="label-form mb-1">Email</label>
                                    <input type="text" class="form-control form-login mt-2" id="userName"
                                        placeholder="Masukkan Email" name="email" required autocomplete="off">

                                    <label for="password" class="label-form mt-3 mb-1">Password</label>
                                    <input type="password" class="form-control form-login mt-2" id="password"
                                        placeholder="Masukkan Password" name="password" required autocomplete="off">

                                    <br>


                                    <div class="d-grid gap-2">

                                        <button type="submit" class="btn-login">Login</button>

                                    </div>
                                </form>
                                <p class="footer-text mt-2">Belum Punya Akun? <a href="{{ '/register' }}">Daftar</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/metisMenu.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>
