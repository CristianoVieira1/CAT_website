<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="BVWEB -  " />
    <title>{{ setting('site.title') }}</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('cursos/assets/images/favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('cursos/assets/images/favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('cursos/assets/images/favicon.ico') }}">
    <link rel="manifest" href="{{ URL::asset('cursos/assets/images/favicon.ico') }}">

    {!! $head ?? '' !!}

    <!-- plugin scripts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,500i,600,700,800%7CSatisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('cursos/assets/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('cursos/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('cursos/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('cursos/assets/css/all.css') }}">
</head>

<body>
<div class="page-wrapper">
    <!-- /.topbar-one -->
    @include('cursos.includes.header')

    <!-- /.site-header -->
    @yield('content')
    <!-- /.mailchimp-one -->
   @include('cursos.includes.footer')
    <!-- /.site-footer -->

</div>
<!-- template scripts -->
<script src={{ URL::asset('cursos/assets/js/vendor.js') }}></script>
<script src={{ URL::asset('cursos/assets/js/theme.js') }}></script>
<script src={{ URL::asset('cursos/assets/js/all.min.js') }}></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XHVMFSXSL9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-XHVMFSXSL9');
</script>
@yield('scripts')
</body>

</html>
