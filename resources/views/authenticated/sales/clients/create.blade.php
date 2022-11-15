@extends('layouts.auth')

@section('content')
    <h2 class="text-center">Maak hier een klant aan</h2>
    <div class="container">
        <form action="{{route('klant.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="when">Naam</label>
                        <input type="text" class="form-control" placeholder="" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn-wide btn btn-success">Maak klant aan</button>
        </form>
    </div>
@endsection
