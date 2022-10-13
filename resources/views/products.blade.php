@extends('layouts.base')
@include('parts.header')
@section('content')
    <div class="container padding-bot-top">
        <div class="row db-margin gx-5">
{{--            Filteren--}}
{{--            <div class="col-sm-3">--}}
{{--                <h3 class="db-subtitle"> Filteren </h3>--}}
{{--            </div>--}}
{{--            Products  --}}
            @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card" style="width: 18rem; margin: 10px;">
                        <img src="{{$product->image_paths}}" class="card-img-top" alt="Picture">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <p class="card-text" @if($product->cat()->id == 1) style="height: 30px;" @else style="height: 150px;" @endif>{{$product->description}}</p>
                            <a href="{{route('offers',$product->id)}}" class="btn btn-primary">Contact opnemen?</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
