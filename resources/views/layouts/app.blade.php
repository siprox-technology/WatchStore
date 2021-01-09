<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <title>Elite Shop</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href="{{ mix ('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="icon" href="{{asset('images/favicon.png')}}')}}" type="image/x-icon">
</head>

<body>
    @yield('content')
    <script src="{{mix ('js/app.js')}}"></script>
</body>
</html>