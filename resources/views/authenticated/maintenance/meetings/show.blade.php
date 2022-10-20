@extends('layouts.auth')
@section('content')
    @php
            $timestamp = $meeting->date_added;
            $date = date('d-m-Y',strtotime($timestamp));
            $time = date('H:i:s',strtotime($timestamp));
    @endphp
<div class="container">
    <h1>Informatie over  <strong class="text-yellow">{{$meeting->remark}}</strong></h1>

    <ul>
        <li>Afspraak naam <strong>{{$meeting->remark}}</strong></li>
        <li>Afspraak is op <strong>{{$date}}</strong> om <strong>{{$time}}</strong></li>
    </ul>
</div>
@endsection
