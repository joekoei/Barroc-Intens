@extends('layouts.auth')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Mijn leasecontracten</div>
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
                            @if($leasecontracts->company_id === $company->id)
                                    <tr>
                                        <td class="text-muted text-center"><a href="">{{$leasecontracts->company()->name}}</a></td>
                                        <td class="text-muted text-center">{{$leasecontracts->pay_method}}</td>
                                        <td class="text-muted text-center">{{$leasecontracts->created_at}}</td>
                                        <td class="text-muted text-center">{{$leasecontracts->agreed_rules}}</td>
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
