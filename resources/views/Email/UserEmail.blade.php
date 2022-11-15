<x-mail::message>
    # Goededag,

    Verifieer je accunt <br>

    <x-mail::button url="http://127.0.0.1:8000/user/verify/{{$cf->token}}">
    Klik Hier
    </x-mail::button>

    Met Vriendelijke groeten,<br>
    Afdeling Sales, <br>
    {{str_replace("_", " ", env("app_name"))}}
</x-mail::message>
