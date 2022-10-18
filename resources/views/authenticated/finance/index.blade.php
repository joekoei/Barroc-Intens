@extends('layouts.auth')
@section('content')
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
                            <th class="text-center">Bewerken</th>
                            <th class="text-center">Verwijderen</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($invoices as $invoice)
                            <tr>
                                <td class="text-muted text-center">{{$invoice->naam_klant}}</td>
                                <td class="text-muted text-center">{{$invoice->company()->name}}</td>
                                <td class="text-muted text-center">{{$invoice->paid_at}}</td>
                                <td class="text-muted text-center">{{$invoice->date}}</td>
                                <td class="text-muted text-center">{{$invoice->prijs}}</td>
                                <td class="text-muted text-center"><a href="{{route('invoices.edit', $invoice)}}" class="btn btn-info">Aanpassen</a></td>
                                <td class="text-muted text-center"><a href="">
                                        <form action="{{route('invoices.destroy', $invoice->id)}}" method="post">
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
            <a class="btn btn-primary" href="{{route('invoices.create')}}">Maak nieuwe factuur aan</a>
        </div>
    </div>
@endsection
