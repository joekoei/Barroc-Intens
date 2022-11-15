@extends('layouts.auth')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Leasecontracten</div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">Bedrijfsnaam</th>
                            <th class="text-center">Betaald methode</th>
                            <th class="text-center">Aangemaakt op</th>
                            <th class="text-center">Gemaakte afspraken</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($lease as $leasecontracts)
                            <tr>
                                @if($leasecontracts->company()->id = "1" )<td class="text-muted text-center">{{$leasecontracts->company()->name}}</td>@endif
                                <td class="text-muted text-center">{{$leasecontracts->pay_method}}</td>
                                <td class="text-muted text-center">{{$leasecontracts->created_at}}</td>
                                <td class="text-muted text-center">{{$leasecontracts->agreed_rules}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Facturen</div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">Naam</th>
                            <th class="text-center">Bedrijfsnaam</th>
                            <th class="text-center">Betaald op</th>
                            <th class="text-center">Aangemaakt op</th>
                            <th class="text-center">Prijs</th>
                            <th class="text-center">Gemaakte afspraken</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($invoice as $invoices)
                            <tr>
                                <td class="text-muted text-center">{{$invoices->naam_klant}}</td>
                                @if($invoices->company()->name = "Devbyte" )<td class="text-muted text-center">{{$invoices->company()->name}}</td>@endif
                                <td class="text-muted text-center">{{$invoices->paid_at}}</td>
                                <td class="text-muted text-center">{{$invoices->date}}</td>
                                <td class="text-muted text-center">{{$invoices->prijs}}</td>
                                <td class="text-muted text-center">{{$invoices->agreed_rules}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
