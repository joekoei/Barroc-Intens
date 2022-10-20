@extends('layouts.auth')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Alle werk Bonnen</div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">Datum</th>
                            <th class="text-center">Werknemer</th>
                            <th class="text-center">Bedrijf/Klant</th>
                            <th class="text-center">Locatie</th>
                            <th class="text-center">Producten</th>
                            <th class="text-center">Onderdelen Gebruikt</th>
                            <th class="text-center">Beschrijving</th>
                            <th class="text-center">Aantekeningen</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($workorders as $workorder )
                            <tr>
                                <td class="text-muted text-center">{{$workorder->when}}</td>
                                <td class="text-muted text-center">{{$workorder->user_id}}</td>
                                <td class="text-muted text-center">{{$workorder->company_id}}</td>
                                <td class="text-muted text-center">{{$workorder->location}}</td>
                                <td class="text-muted text-center">{{$workorder->products_worked_on}}</td>
                                <td class="text-muted text-center">{{$workorder->parts_used}}</td>
                                <td class="text-muted text-center">{{$workorder->description}}</td>
                                <td class="text-muted text-center">{{$workorder->note}}</td>
                                <td class="text-center">
                                    <a href="{{route('workorders.edit', )}}" class="btn btn-success text-white">Edit</a>
                                </td>
                                <td class="text-center">
                                    <form id="delete.form" action="{{route('workorders.destroy', $workorder->id)}}" method="post" class="d-hidden">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-warning text-white" value="Remove">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
@endsection
