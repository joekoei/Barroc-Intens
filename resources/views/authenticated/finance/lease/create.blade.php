@extends('layouts.auth')
@section('content')
    <h2 class="text-center">Maak een <strong>leasecontract</strong> aan voor in het systeem</h2>
    <div class="container">
        <form method="post" action="{{route('leasecontracts.store')}}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first">Naam klant</label>
                        <input type="text" class="form-control" placeholder="Voornaam" id="firstname" name="firstname">
                    </div>
                </div><div class="col-md-6">
                    <div class="form-group">
                        <label for="first">Achternaam klant</label>
                        <input type="text" class="form-control" placeholder="Achternaam" id="lastname" name="lastname">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first">Bedrijf</label>
                        <select class="form-select" name="comp" id="comp">
                            <option selected>Choose...</option>
                            @foreach($companies as $comp)
                                <option value="{{$comp->id}}">{{$comp->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first">Product</label>
                        <select class="form-select" name="product" id="product">
                            <option selected>{{$lease->product}}</option>
                            @foreach($products as $prod)
                                <option value="{{$prod->name}}">{{$prod->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first">Gemaakte afspraken</label>
                        <textarea class="form-control" name="agreed_rules" id="agreed_rules" placeholder="Extra informatie" cols="85" rows="1"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first">Aangemaakt op</label>
                        <input type="date" class="form-control" placeholder="" id="date" name="date">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pay_method">Betaalmethode</label>
                        <select class="form-select" name="pay_method" id="pay_method">
                            <option value="">Choose...</option>
                            <option value="Maandelijks">Maandelijks</option>
                            <option value="Jaarlijks">Jaarlijks</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-select" name="status" id="status">
                            <option value="">Choose...</option>
                            <option value="Betaald">Betaald</option>
                            <option value="Niet betaald">Niet betaald</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first">Prijs</label>
                        <input type="text" class="form-control" name="prijs" id="prijs" placeholder="Prijs in €">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn-wide btn btn-success">Sla het leasecontract op</button>
        </form>
    </div>
@endsection
