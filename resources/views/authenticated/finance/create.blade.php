@extends('layouts.auth')
@section('content')
    <h2 class="text-center">Maak een factuur aan voor in het systeem</h2>
    <div class="container">
        <form method="post" action="{{route('invoices.store')}}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first">Datum</label>
                        <input type="date" class="form-control" placeholder="" id="date" name="date">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="last">Betaald op</label>
                        <input type="date" class="form-control" placeholder="" id="paid_at" name="paid_date">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn-wide btn btn-success">Sla het factuur op</button>
        </form>
    </div>
@endsection
