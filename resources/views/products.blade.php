@extends('layouts.base')
@include('parts.header')
@section('content')
    <div class="container padding-bot-top">
        <div class="row db-margin gx-5">
{{--            Filteren--}}
            <div class="col-sm-3">
                <h3 class="db-subtitle"> Filteren </h3>
            </div>
{{--            Products  --}}
            <div class="col-sm-9">
                <h3 class="db-subtitle">Products</h3>
                @foreach( $products as $product)
                    <h2> {{ $product->name }}</h2>
                    <p> {{$product-> description}}</p>
                    <p> {{$product->image_paths}}</p>
                    <p> {{$product-> price}}</p>
                @endforeach
            </div>
        </div>
    </div>

@endsection
