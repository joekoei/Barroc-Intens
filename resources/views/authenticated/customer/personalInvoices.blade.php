@extends('layouts.auth')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Mijn facturen</div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">Naam</th>
                            <th class="text-center">Bedrijfsnaam</th>
                            <th class="text-center">Betaald op</th>
                            <th class="text-center">Aangemaakt op</th>
                            <th class="text-center">Prijs</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($invoices as $invoice)
                            @if($invoice->company_id === $company->id)
                                <tr>
                                    <td class="text-muted text-center">{{$invoice->naam_klant}}</td>
                                    <td class="text-muted text-center">{{$invoice->company()->name}}</td>
                                    <td class="text-muted text-center">{{$invoice->paid_at}}</td>
                                    <td class="text-muted text-center">{{$invoice->date}}</td>
                                    <td class="text-muted text-center">{{$invoice->prijs}}</td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
