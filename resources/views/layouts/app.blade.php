<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

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
    </style>
</head>

<body onload=display_ct();>
    <div class="page-container">
        @include('layouts.navbar')
        @include('layouts.sidebar')

        @yield('content')
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



    </div>


</body>

</html>
