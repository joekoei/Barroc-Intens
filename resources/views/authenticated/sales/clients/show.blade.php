@extends('layouts.auth')
@section('content')
    <h2 class="text-center">Bewerk de opmerking bij de klant</h2>
    <h4 class="text-center">Huidige opmerkingen bij de klant</h4>
    @foreach(json_decode($user->notes) as $note)
        <p class="text-center">{{$note}} - <a href="">X</a></p>
    @endforeach
    <div class="container">
        <form action="{{route('klant.note')}}" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{$user->id}}">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first">Naam</label>
                        <input type="text" class="form-control" value="{{$user->name}}" placeholder="" id="owner" name="owner" disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="last">Bedrijfsnaam</label>
                        <input type="text" class="form-control" placeholder="" value="{{$user->company()[0]->name}}" name="company" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="company">Opmerking</label>
                        <input type="text" class="form-control" name="note">
                    </div>
                </div>
            </div>
            <input type="submit" class="btn-wide btn btn-success" value="Voeg opmerking toe">
        </form>
    </div>
@endsection
