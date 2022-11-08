@extends('layouts.auth')
@section('content')
    <div class="ml-5">
        <h2 class="mb-4">Mijn gegevens</h2>
        <div class="d-flex">
            <p class="font-weight-bold">Gebruikersnaam:</p>
            <p class="ml-2">{{Auth::user()->name}}</p>
        </div>

        <div class="d-flex">
            <p class="font-weight-bold">Email:</p>
            <p class="ml-2">{{Auth::user()->email}}</p>
        </div>

        <div class="d-flex">
            <p class="font-weight-bold">created_at:</p>
            <p class="ml-2">{{Auth::user()->created_at}}</p>
        </div>

        <div class="d-flex">
            <p class="font-weight-bold">updated_at:</p>
            <p class="ml-2">{{Auth::user()->updated_at}}</p>
        </div>

        <div class="d-flex">
            <a class="btn-wide btn btn-success" href="{{route('personal.data.edit', $user->id)}}">Edit gegevens</a>
        </div>
        <div class="d-flex pt-3 ">
            <p>Als u uw account wilt verwijderen stuur een mailtje naar <a class="privacy-link-mail" href="mailto:someone@yoursite.com">privacy@barroc.it</a> </p>
        </div>
    </div>

@endsection
