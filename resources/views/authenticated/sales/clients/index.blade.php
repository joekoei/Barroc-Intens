@extends('layouts.auth')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Onze klanten
                    <a href="{{route('klant.create')}}" class="btn btn-info" style="margin-left: 75%">Maak een klant aan.</a>
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">Bedrijfsnaam</th>
                            <th class="text-center">Naam</th>
                            <th class="text-center">Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($companies as $company)
                            <tr>
                                <td class="text-muted text-center">{{$company->name}}</td>
                                <td class="text-muted text-center">{{$company->owner()->name}}</td>
                                <td class="text-muted text-center">{{$company->owner()->email}}</td>
                                <td class="text-muted text-center"><a href="{{route('klant.show',$company->owner())}}" class="btn btn-info">Voeg opmerking toe</a></td>
                                <td class="text-muted text-center"><a href="{{route('klant.email', $company)}}" class="btn btn-info">Stuur offerte</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
