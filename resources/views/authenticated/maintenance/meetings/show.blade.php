@extends('layouts.auth')
@section('content')
<div class="container">
    <h1>Informatie over <span class="text-yellow">{{$meeting->remark}}</span></h1>

    <ul>
        <li>Afspraak naam {{$meeting->remark}}</li>
    </ul>
</div>
@endsection
