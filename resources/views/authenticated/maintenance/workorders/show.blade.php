@extends('layouts.auth')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card p-4">
                <h1 class="db-subtitle">Werkbon : <span style="font-size: 22px">{{$workorder->workorder_id}}</span></h1>
                <p>Aangemaakt : {{$workorder->when}}</p>
                <p>Gebruiker : {{$workorder->user()->name}}</p>
                <p>Bij bedrijf : {{$workorder->company()->name}}</p>
                <p>Op locatie : {{$workorder->location}}</p>
                <p>Producten waaraan gewerkt is : {{json_decode($workorder->products_worked_on)}}</p>
                <p>Onderdelen gebruikt : {{json_decode($workorder->parts_used)}}</p>
                <p>Beschrijving uitgevoerd onderhoud : {{$workorder->description}}</p>
                <p>Notitie werknemer : {{$workorder->note}}</p>
            </div>
@endsection
