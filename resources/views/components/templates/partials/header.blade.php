<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="{{ asset('/assets/images/logos/favicon.png') }}" />

    <!-- Core Css -->
    <link rel="stylesheet" href="{{ asset('/assets/css/styles.css') }}" />

    <title>Spike Bootstrap Admin</title>
    <!-- jvectormap  -->
    <link rel="stylesheet" href="{{ asset('/assets/libs/jvectormap/jquery-jvectormap.css') }}">

    {{-- Jquery --}}
    <script src="{{ asset('/assets/js/jquery/jquery.min.js') }}"></script>

    {{-- Sweetalert --}}
    <script src="{{ asset('/assets/libs/sweetalert2/dist/sweetalert2.min.js')}}"></script>

    {{-- fontawesome --}}
    <link href="{{ asset('assets/fontawesome/css/all.min.css') }}" rel="stylesheet">


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.documentElement.setAttribute("data-bs-theme", "light");
        });
    </script>
</head>
