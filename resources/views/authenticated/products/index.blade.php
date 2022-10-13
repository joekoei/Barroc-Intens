@extends('layouts.auth')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Al onze standaard producten</div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">Naam</th>
                            <th class="text-center">Beschrijving</th>
                            <th class="text-center">Prijs</th>
                            <th class="text-center">Categorie</th>
                            <th class="text-center">Laatst geupdate</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td class="text-muted text-center">{{$product->name}}</td>
                                <td class="text-muted text-center">{{$product->description}}</td>
                                <td class="text-muted text-center">{{$product->price}}</td>
                                <td class="text-muted text-center">{{$product->cat()->name}}</td>
                                <td class="text-muted text-center">{{$product->updated_at}}</td>
                                <td class="text-center">
                                    <a href="{{route('products.edit', $product)}}" class="btn btn-success text-white">Edit</a>
                                </td>
                                <td class="text-center">
                                    <form id="delete.form" action="{{route('products.destroy', $product->id)}}" method="post" class="d-hidden">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-warning text-white" value="Remove">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @if(Auth::user()->role()->name == "inkoop")
                    <div class="d-block text-center card-footer">
                        <a href="{{route('products.create')}}" class="db-auth btn">Product aanmaken</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
