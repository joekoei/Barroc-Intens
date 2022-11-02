@extends('layouts.auth')
@section('content')
    <h2 class="text-center">Maak een product aan voor in het systeem</h2>
    <div class="container">
        <form action="{{route('products.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first">Naam</label>
                        <input type="text" class="form-control" placeholder="" id="name" name="name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="last">Beschrijving product</label>
                        <textarea class="form-control" placeholder="" name="description"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="company">Prijs</label>
                        <input type="text" class="form-control" placeholder="" id="price" name="price">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone">Categorie</label>
                        <select class="form-select" name="cat" id="cat">
                            <option selected>Choose...</option>
                            @foreach($product_cats as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="company">Bestand</label>
                        <input type="file" class="form-control" placeholder="" id="image" name="image">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="stock">Voorraad</label>
                    <input type="number" class="form-control" name="stock" id="stock">
                </div>
            </div>
            <button type="submit" class="btn-wide btn btn-success">Sla het product op</button>
        </form>
    </div>
@endsection
