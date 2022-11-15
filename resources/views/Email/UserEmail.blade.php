<x-mail::message>
    # Goededag,

    Verifieer je accunt <br>

    <a href="http://127.0.0.1:8000/user/verify/{{$cf->token}}">Klik hier</a>

    Met Vriendelijke groeten,<br>
    Afdeling Sales, <br>
    {{str_replace("_", " ", env("app_name"))}}
</x-mail::message>
