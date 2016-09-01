<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link  rel="stylesheet" href=" {{asset('assets/css/bootstrap.min.css') }}">
    <link  rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
<body>
<div class="container">
   @yield('content')
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</html>