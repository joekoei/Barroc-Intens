@extends('layouts.auth')
@section('content')
    <h2 class="text-center">Bewerk het aangemaakte leasecontract</h2>
    <div class="container">
        <form method="post" action="{{route('leasecontracts.update', $lease->id)}}">
            @csrf
            @method('PUT')
            <div class="row">
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
                        <textarea class="form-control" name="gemaakte_afspraken" id="gemaakte_afspraken" placeholder="Extra informatie" cols="85" rows="1">{{$lease->agreed_rules}}</textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="last">Betaalmethode</label>
                        <select class="form-control" name="pay_method" id="pay_method">
                            <option value="">{{$lease->pay_method}}</option>
                            <option value="">--------</option>
                            <option value="Maandelijks">Maandelijks</option>
                            <option value="Jaarlijks">Jaarlijks</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first">Datum</label>
                        <input type="date" class="form-control" placeholder="" id="date" name="date" value="{{$lease->date}}">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn-wide btn btn-success">Sla het leasecontract op</button>
        </form>
    </div>
@endsection
