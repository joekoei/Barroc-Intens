@extends('layouts.auth')
@section('content')
    <div class="ml-5">
        <form method="post" action="{{route('personalDataUpdate', $user->id)}}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Gebruikersnaam:</label>
                        <input type="text" class="form-control" placeholder="Gebruikersnaam" id="name" name="name" value="{{$user->name}}">
                    </div>
                </div><div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" placeholder="Achternaam" id="email" name="email" value="{{$user->email}}">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn-wide btn btn-success">Sla de gegevens op</button>
        </form>
    </div>
@endsection
