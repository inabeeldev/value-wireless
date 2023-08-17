<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Value Wireless') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('public/images/favicon.ico') }}">
    {{-- {{ asset('public/css/app.css') }} --}}
    <link href="{{ asset('public/libs/chartist/chartist.min.css') }}" rel="stylesheet">
    {{-- <link href="libs/chartist/chartist.min.css" rel="stylesheet"> --}}

    <!-- Bootstrap Css -->
    <link href="{{ asset('public/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css">
    {{-- <link href="css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css"> --}}
    <!-- Icons Css -->
    <link href="{{ asset('public/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="{{ asset('public/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/css/custom.css') }}" id="app-style" rel="stylesheet" type="text/css">

    {{-- <link href="css/app.min.css" id="app-style" rel="stylesheet" type="text/css"> --}}

    <link href="{{ asset('public/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('public/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset('public/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css">



    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body data-sidebar="dark">



    <main class="py-4">
        @include('layouts.header')
        @include('layouts.sidebar')
        @yield('content')
    </main>




    <script src="{{ asset('public/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('public/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('public/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('public/libs/node-waves/waves.min.js') }}"></script>


    <!-- Peity chart-->
    <script src="{{ asset('public/libs/peity/jquery.peity.min.js') }}"></script>

    <!-- Plugin Js-->
    <script src="{{ asset('public/libs/chartist/chartist.min.js') }}"></script>
    <script src="{{ asset('public/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js') }}"></script>

    <script src="{{ asset('public/js/pages/dashboard.init.js') }}"></script>

    <script src="{{ asset('public/js/app.js') }}"></script>
    <script src="{{ asset('public/js/custom.js') }}"></script>


    <!-- table js -->
    <!-- Required datatable js -->
    <script src="{{ asset('public/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('public/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('public/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('public/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('public/libs/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('public/libs/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('public/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('public/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('public/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('/js/pages/datatables.init.js') }}"></script>


    <script src="{{ asset('public/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('public/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('public/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{ asset('public/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{ asset('public/libs/node-waves/waves.min.js')}}"></script>


    <!-- select -->
    <script src="{{ asset('public/js/pages/datatables.init.js') }}"></script>

    @yield('customJS')

</body>
</html>
