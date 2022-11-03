@extends('layouts.auth')
@section('content')
    <h2 class="text-center">Bestel een nieuwe voorraad</h2>
    <div class="container">
        <form action="{{route('products.order.store')}}" method="post">
            <input type="hidden" name="product_id" value="{{$product->id}}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="stock">Voorraad</label>
                        <input type="number" class="form-control" name="stock" id="stock">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn-wide btn btn-success">Bestel je producten</button>
        </form>
    </div>
@endsection
