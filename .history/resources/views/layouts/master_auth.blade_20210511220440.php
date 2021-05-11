<!DOCTYPE html>
<html lang="ja">
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
{{-- @include('partials.header') --}}
<div class="container">
@yield('content')
</div><!-- /.container -->
<footer class="footer">
    <div class="container">
    {{-- <p class="text-muted">認証デモ</p> --}}
    </div>
  </footer>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <script src="{{ url('/') }}/dist/js/vendor/jquery.min.js"></script>
  <script src="{{ url('/') }}/dist/js/vendor/video.js"></script>
  <script src="{{ url('/') }}/dist/js/flat-ui.min.js"></script>

  <script src="{{ url('/') }}/assets/js/prettify.js"></script>
  <script src="{{ url('/') }}/assets/js/application.js"></script>

  @yield('scripts')
  </body>
  </html>

</body>
</html>
