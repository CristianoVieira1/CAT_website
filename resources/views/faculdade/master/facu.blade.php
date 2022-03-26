<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, folow">
    <meta name="author" content="Cristiano Borges - cristianovieirati@gmail.com" />
    <title>Faculdade a Distância e Pós-graduação a Distância | EAD Unilins </title>

        {!! $head ?? '' !!}

    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('faculdade/assets/images/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('faculdade/assets/images/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('faculdade/assets/images/favicon.png') }}">
    <link rel="manifest" href="{{ URL::asset('faculdade/assets/images/favicon.png') }}">

    <!-- google fonts -->
    <link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Open+Sans:400,700') }}" rel="stylesheet">

    <!-- styles -->
    <link rel="stylesheet" href="{{ URL::asset('faculdade/assets/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('faculdade/assets/css/carousel.min.css') }}">

</head>

<body>

<div class="socials-float">
    <a href="{{ URL::asset('https://www.facebook.com/catbroficial') }}" class="icon-facebook" target="_blank" rel="noopener" title="Curta nossa página no Facebook"></a>

    <a href="{{ URL::asset('https://www.instagram.com/catbr.oficial/?hl=pt-br/') }}" class="icon-instagram" target="_blank" rel="noopener" title="Confira nosso instagram"></a>

    <a href="{{ URL::asset('https://api.whatsapp.com/send?phone=555130858338') }}" class="icon-whatsapp" title="Fale conosco pelo whatsapp" target="_blank" rel="noopener"></a>
</div>

<a href="{{ URL::asset('https://api.whatsapp.com/send?phone=555130858338') }}" class="icon-whatsapp float-whatsapp" target="_blank" rel="noopener">
    <span>Faça sua matrícula pelo Whatsapp</span>
</a>
@include('faculdade.includes.facuHeader')

@yield('content')

@include('faculdade.includes.facuFooter')

<!-- scripts -->
<script src={{ URL::asset('faculdade/assets/js/jquery.js') }}></script>
<script src={{ URL::asset('faculdade/assets/js/vendor.js') }}></script>
<script src={{ URL::asset('faculdade/assets/js/detalhe-curso.js') }}></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XHVMFSXSL9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-XHVMFSXSL9');
</script>
</body>
</html>
