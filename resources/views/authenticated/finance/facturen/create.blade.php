@extends('layouts.auth')
@section('content')
    <h2 class="text-center">Maak een factuur aan voor in het systeem</h2>
    <div class="container">
        <form method="post" action="{{route('invoices.store')}}">
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
                        <label for="first">Gemaakte afspraken</label>
                        <textarea class="form-control" name="gemaakte_afspraken" id="gemaakte_afspraken" placeholder="Extra informatie" cols="85" rows="1"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="last">Prijs</label>
                        <input type="text" class="form-control" placeholder="Prijs in €" id="prijs" name="prijs">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first">Datum</label>
                        <input type="date" class="form-control" placeholder="" id="date" name="date">
                    </div>
                </div>
{{--                <div class="col-md-6">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="last">Betaald op</label>--}}
{{--                        <input type="date" class="form-control" placeholder="" id="paid_at" name="paid_at">--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
            <button type="submit" class="btn-wide btn btn-success">Sla het factuur op</button>
        </form>
    </div>
@endsection
