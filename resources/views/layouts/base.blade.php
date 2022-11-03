<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>{{str_replace("_", " ", env("app_name"))}}</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">

</head>
<body>

@yield('content')

@include('parts.footer')
<div class="alert text-center cookiealert" role="alert" style="background: #1a202c none !important;">
    <b>Hou jij van koekjes bij de koffie?</b> &#x1F36A; We gebruiken cookies om jou ervaring op onze website te verbeteren! Meer weten? Kijk dan in de privacyverklaring. <a href="{{asset('files/privacy_statement.pdf')}}" target="_blank" class="text-yellow">Kijk hier</a>

    <button type="button" class="btn btn-primary btn-sm acceptcookies">
        Ik ga akkoord
    </button>
</div>
<script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
    window.addEventListener("cookieAlertAccept", function() {
        // do cookie accepting osmething
    })
</script>
</body>
</html>
