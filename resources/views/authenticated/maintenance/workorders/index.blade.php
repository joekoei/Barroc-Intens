@extends('layouts.auth')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header d-flex justify-content-between"><p>Alle werk Bonnen</p><a class="btn btn-primary" href="{{route('workorders.create')}}">Create</a></div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">Werkbon-id</th>
                            <th class="text-center">Datum</th>
                            <th class="text-center">Werknemer</th>
                            <th class="text-center">Bedrijf/Klant</th>
                            <th class="text-center">Locatie</th>
                            <th class="text-center">Producten</th>
                            <th class="text-center">Onderdelen Gebruikt</th>
                            <th class="text-center">Beschrijving</th>
                            <th class="text-center">Aantekeningen</th>
                            <th class="text-center">Bekijken</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($workorders as $workorder )
                            @if( Auth::user()->id == $workorder->user_id || Auth::user()->id == 6)
                                <tr>
                                    <td class="text-muted text-center">{{$workorder->workorder_id}}</td>
                                    <td class="text-muted text-center">{{$workorder->when}}</td>
                                    <td class="text-muted text-center">{{$workorder->user()->name}}</td>
                                    <td class="text-muted text-center">{{$workorder->company()->name}}</td>
                                    <td class="text-muted text-center">{{$workorder->location}}</td>
                                    <td class="text-muted text-center">{{$workorder->products_worked_on}}</td>
                                    <td class="text-muted text-center">{{$workorder->parts_used}}</td>
                                    <td class="text-muted text-center">{{$workorder->description}}</td>
                                    <td class="text-muted text-center">{{$workorder->note}}</td>
                                    <td class="text-muted text-center"><a href="{{route('workorders.show', $workorder->id)}}" class="btn btn-success text-white">Bekijk</a></td>
                                    <td class="text-center">
                                    </td>
                                    <td class="text-center">
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>

                </div>
@endsection
