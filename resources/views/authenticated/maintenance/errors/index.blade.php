@extends('layouts.auth')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Al onze standaard producten</div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">Naam</th>
                            <th class="text-center">Beschrijving</th>
                            <th class="text-center">Prijs</th>
                            <th class="text-center">Categorie</th>
                            <th class="text-center">Laatst geupdate</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($appointment as $appointment)
                            <tr>
                                <td class="text-muted text-center">{{$appointment->company_id}}</td>
                                <td class="text-muted text-center">{{$appointment->remark}}</td>
                                <td class="text-muted text-center">{{$appointment->created_at}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
