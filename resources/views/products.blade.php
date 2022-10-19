@extends('layouts.base')
@include('parts.header')
@section('content')
    <div class="container d-flex justify-content-center">
        <div class="row mt-5">
            @foreach($products as $product)
            <div class="col-sm-3">
                <div class="card mb-2">
                    <img src="{{asset($product->image_paths)}}" class="card-img-top" style="width: 100%;">
                    <div class="card-body pt-0 px-0">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <h6>{{$product->name}}</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="mx-3 mt-3 mb-2"><a href="{{route('offers',$product->id)}}" class="btn btn-warning btn-block"><small>BUILD & PRICE</small></a></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
