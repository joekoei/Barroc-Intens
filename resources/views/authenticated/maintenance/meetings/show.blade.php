@extends('layouts.auth')
@section('content')
<div class="container">
    <h1>Informatie over  <strong class="text-yellow">{{$meeting->remark}}</strong></h1>

    <ul>
        <li>Afspraak naam <strong>{{$meeting->remark}}</strong></li>
        <li>Afspraak is om  <strong>{{$meeting->date_added}}</strong></li>
    </ul>
</div>
@endsection
