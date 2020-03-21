<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Akademik</title>
    {{--memanggil Bootstrap.
    Komentar ini tidak akan tampak di browser--}}
    <link href="{{ asset('../bootstrap-3.3.6/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
    @include('navbar')
    @yield('main')
    </div>
    @yield('footer')
    <script src="{{ asset('../js/query_2_2_1.min.js') }}"></script>
    <script src="{{ asset('../bootstrap_3_3_6/js/bootstrap.min.js') }}"></script>
</body>
</html>



