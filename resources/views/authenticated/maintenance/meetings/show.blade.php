@extends('layouts.auth')
@section('content')
    @php
            $timestamp = $meeting->date_added;
            $date = date('d-m-Y',strtotime($timestamp));
            $time = date('H:i',strtotime($timestamp));
    @endphp
<div class="container">
    <h1>Informatie over <strong class="text-yellow">{{ucfirst($meeting->remark)}}</strong></h1>

    <div class="row">
        <div class="col-md-5 mt-4">
            <div class="card p-3">
                <div class="card-body">
                    <h3><strong>Informatie over het bedrijf</strong></h3>
                    <p class="mt-4 mb-0 p-0">Naam van het bedrijf is <strong>{{ucfirst($meeting->company()->name)}}</strong></p>
                    <p class="m-0 p-0">Adres van het bedrijf is <strong>{{$meeting->company()->street}} {{ucfirst($meeting->company()->house_number)}}</strong> in <strong>{{ucfirst($meeting->company()->city)}}</strong></p>
                </div>
            </div>
        </div>
        <div class="col-md-5 mt-4">
            <div class="card p-3">
                <div class="card-body">
                    <h3><strong>Informatie over afspraak</strong></h3>
                    <p class="mt-4 mb-0 p-0">Afspraak naam <strong>{{ucfirst($meeting->remark)}}</strong></p>
                    <p class="m-0 p-0">Afspraak is op <strong>{{$date}}</strong> om <strong>{{$time}}</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
