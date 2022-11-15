@extends('layouts.auth')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Mijn producten</div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">Product naam</th>
                            <th class="text-center">Aangemaakt op</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                                <tr>
                                    <td class="text-muted text-center">{{$product->product}}</td>
                                    <td class="text-muted text-center">{{$product->created_at}}</td>
                                    <td class="text-muted text-center"><a class="btn btn-info" href="{{route('personal.storing',[$product->company(), $product->id])}}">Storing aanvraag doen</a></td>
                                </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
