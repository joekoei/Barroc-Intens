@extends('layouts.auth')
@section('content')
    <h1 class="db-subtitle">Inkopen beheren</h1>
    <button class="btn">Inkoop doen</button>

    @if(orderAmount > 5000 || orderStatus != done )

    @endif
@endsection
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header d-flex justify-content-between"><p>Alle werk Bonnen</p><a class="btn btn-primary" href="{{route('workorders.create')}}">Create</a></div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="text-center">Order id</th>
                        <th class="text-center">Product Amount</th>
                        <th class="text-center">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($order as $order )
                        @if( Order::amount() > 5000)
                            <tr>
                                <td class="text-muted text-center">{{$order->id}}</td>
                                <td class="text-muted text-center">{{$order->amount}}</td>
                                <td class="text-muted text-center">{{$order->status}}</td>
                                <td class="text-muted text-center">{{Goedkeuren}}</td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>

            </div>
