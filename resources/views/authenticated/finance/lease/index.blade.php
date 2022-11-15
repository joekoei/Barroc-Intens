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
                            <th class="text-center">Product</th>
                            <th class="text-center">Betaald methode</th>
                            <th class="text-center">Aangemaakt op</th>
                            <th class="text-center">Prijs</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Bewerken</th>
                            <th class="text-center">Verwijderen</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($lease as $leasecontracts)
                            <tr>
                                <td class="text-muted text-center"><a href="{{route('leasecontracts.show', $leasecontracts)}}">{{$leasecontracts->company()->name}}</a></td>
                                <td class="text-muted text-center">{{$leasecontracts->product}}</td>
                                <td class="text-muted text-center">{{$leasecontracts->pay_method}}</td>
                                <td class="text-muted text-center">{{$leasecontracts->created_at}}</td>
                                <td class="text-muted text-center">{{$leasecontracts->prijs}}</td>
                                <td class="text-muted text-center">{{$leasecontracts->status}}</td>
                                <td class="text-muted text-center"><a href="{{route('leasecontracts.edit', $leasecontracts)}}" class="btn btn-info">Aanpassen</a></td>
                                <td class="text-muted text-center"><a href="">
                                        <form action="{{route('leasecontracts.destroy', $leasecontracts)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Verwijderen" class="btn btn-danger">
                                        </form>
                                    </a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <a class="btn btn-primary" href="{{route('leasecontracts.create')}}">Maak een nieuwe leasecontract aan</a>
        </div>
    </div>
@endsection
