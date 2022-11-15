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
                        @foreach($users as $user)
                            @if($user->role_id == 5)
                                <tr>
                                    <td class="text-muted text-center">{{$user->name}}</td>
                                    <td class="text-muted text-center">{{$user->name}}</td>
                                    <td class="text-muted text-center">{{$user->email}}</td>
                                    <td class="text-muted text-center"><a href="{{route('klant.show', $user->id)}}" class="btn btn-info">Voeg opmerking toe</a></td>
                                    <td class="text-muted text-center"><a href="{{route('klant.email')}}" class="btn btn-info">Stuur offerte</a></td>
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
