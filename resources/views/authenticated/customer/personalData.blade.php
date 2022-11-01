@extends('layouts.auth')
@section('content')
    <div class="ml-5">
        <h1 class="mb-4">Mijn gegevens</h1>
        <div class="d-flex">
            <p class="font-weight-bold">Gebruikersnaam:</p>
            <p class="ml-2">{{$user->name}}</p>
        </div>

        <div class="d-flex">
            <p class="font-weight-bold">Email:</p>
            <p class="ml-2">{{$user->email}}</p>
        </div>

        <div class="d-flex">
            <p class="font-weight-bold">created_at:</p>
            <p class="ml-2">{{$user->created_at}}</p>
        </div>

        <div class="d-flex">
            <p class="font-weight-bold">updated_at:</p>
            <p class="ml-2">{{$user->updated_at}}</p>
        </div>
    </div>

@endsection
