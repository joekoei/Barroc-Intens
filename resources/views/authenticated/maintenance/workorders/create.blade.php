@extends('layouts.auth')

@section('content')
    <h2 class="text-center">Maak je Werkbon</h2>
    <div class="container">
        <form action="{{route('workorders.store')}}" method="POST">
            @csrf
            <input type="hidden" name="who" value="{{Auth::user()->name}}">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="when">Datum:</label>
                        <input type="datetime-local" class="form-control" placeholder="" id="when" name="when">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="user_id" id="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                    </div>
                    <div class="form-group">
                        <label for="first">Bedrijf</label>
                        <select class="form-select" name="company_id" id="company_id">
                            <option selected>Kies Bedrijf..</option>
                            @foreach($companies as $comp)
                                <option value="{{$comp->id}}">{{$comp->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="location">Locatie:</label>
                        <input type="text" class="form-control" placeholder="" id="location" name="location">
                    </div>
                    <div class="form-group">
                        <label for="products_worked_on">Producten:</label>
                        <input type="text" class="form-control" placeholder="" id="products_worked_on" name="products_worked_on">
                    </div>
                    <div class="form-group">
                        <label for="parts_used">Onderdelen Gebruikt:</label>
                        <select class="form-select" name="parts_used" id="parts_used">
                            <option selected>Kies hier je onderdelen..</option>
                            @foreach($products as $product)
                                <option value="{{$product->id}}">{{$product->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Beschrijving:</label>
                        <input type="text" class="form-control" placeholder="" id="description" name="description">
                    </div>
                    <div class="form-group">
                        <label for="note">Aantekeningen:</label>
                        <input type="text" class="form-control" placeholder="" id="note" name="note">
                    </div>

                </div>
            </div>
            <button type="submit" class="btn-wide btn btn-success">Maak Werkbon aan</button>
        </form>
    </div>
@endsection
