@extends('layouts.auth')
@section('content')
    <h2 class="text-center">Bewerk het aangemaakte factuur</h2>
    <div class="container">
        <form method="post" action="{{route('invoices.update', $invoice->id)}}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first">Bedrijf</label>
                        <select class="form-select" name="companies" id="companies">
                            <option selected value="{{$invoice->company()->id}}">{{$invoice->company()->name}}</option>
                            @foreach($companies as $comp)
                                <option value="{{$comp->id}}">{{$comp->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first">Datum</label>
                        <input type="date" class="form-control" placeholder="" id="date" name="date" value="{{$invoice->date}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="last">Betaald op</label>
                        <input type="date" class="form-control" placeholder="" id="paid_at" name="paid_date" value="{{$invoice->paid_date}}">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn-wide btn btn-success">Sla het factuur op</button>
        </form>
    </div>
@endsection
