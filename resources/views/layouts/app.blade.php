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
    {{-- <link rel="stylesheet" type="text/css" href="css/app.css"> --}}
    <link rel="stylesheet" type="text/css" href="css/default-css.css">
    <link rel="stylesheet" type="text/css" href="css/metisMenu.css">
    <link rel="stylesheet" type="text/css" href="css/slicknav.min.css">

    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/typography.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" /> --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <link rel="stylesheet"
        href="http://cdn.datatables.net/plug-ins/a5734b29083/integration/bootstrap/3/dataTables.bootstrap.css" />
    <link rel="stylesheet" href="http://cdn.datatables.net/responsive/1.0.2/css/dataTables.responsive.css" />


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

<body>
    <div class="page-container">
        @include('layouts.navbar')
        @include('layouts.sidebar')

        @yield('content')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
        <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
        {{-- <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script> --}}



    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            $('#myDatausers').DataTable({
                "columns": [
                    null,
                    null,
                    null,
                    null,

                    {
                        orderable: false
                    },
                ],
                "searching": false,
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#myDatamitra').DataTable({
                "searching": false,
                "columns": [
                    null,
                    null,
                    null,
                    null,
                    null,

                    {
                        orderable: false
                    },
                ],

            });
        });
    </script>
    @if (session('toast_error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: "{{ session('toast_error') }}",
                showConfirmButton: false,
                timer: 3000
            });
        </script>
    @endif

</body>

</html>
