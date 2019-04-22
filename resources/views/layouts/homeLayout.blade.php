<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf_token" content="{{csrf_token()}}">
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
@yield('content')
</body>

<script src="{{asset('js/app.js')}}"></script>
</html>