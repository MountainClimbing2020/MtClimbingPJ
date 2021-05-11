<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ url('/') }}/dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"><!-- Loading Bootstrap -->
    <link href="{{ url('/') }}/dist/css/flat-ui.min.css" rel="stylesheet"><!-- Loading Flat UI -->
    <link href="{{ url('/') }}/css/starter-template.css" rel="stylesheet"><!--Bootstrap theme(Starter)-->
    <link rel="shortcut icon" href="{{ url('/') }}/dist/img/favicon.ico">
    @yield('styles')
</head>
<body>
@include('partials.header')
<div class="container">
@yield('content')
</div><!-- /.container -->

</body>
</html>
