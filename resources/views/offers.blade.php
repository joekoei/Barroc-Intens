@extends('layouts.base')
@include('parts.header')
@section('content')
<div class="container w-50 padding-bot-top">
    <form action="{{route('contact.store')}}" method="post">
        @csrf
        <div class="row">
            <h1>Offerte aanvraag formulier</h1>
            <div class="col-md-6 padding-bot">
                <label class="form-label" for="emailInput">Email:</label>
                <input class="form-control" type="text" value="" name="email" id="emailInput">
            </div>
            <div class="col-md-6 padding-bot">
                <label  class="form-label" for="aanhefInput">Aanhef:</label>
                <select class="form-control" id="aanhefInput" name="aanhef">
                    <option value="">Kies een aanhef</option>
                    <option value="Dhr.">Dhr.</option>
                    <option value="Mevr.">Mevr.</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 padding-bot">
                <label  for="firstNameInput">Voornaam:</label>
                <input class="form-control" type="text" id="firstNameInput" name="firstname">
            </div>
            <div class="col-md-6 padding-bot">
                <label for="lastNameInput">Achternaam:</label>
                <input class="form-control" type="text" name="lastname" id="lastNameInput">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 padding-bot">
                <label for="lastNameInput">Onderwerp:</label>
                <input type="hidden" name="subject" value="{{$productname}}">
                <input value="{{$productname}}" class="form-control" type="text" name="subject" id="lastNameInput" disabled>
            </div>
        </div>
        <div class="col-12 padding-bot">
            <label for="textBoxInput">Reden voor contact:</label>
            <textarea class="form-control" name="reasoncontact" id="" cols="30" rows="10"></textarea>
        </div>
        <br>
        <div>
            <input type="submit" class="db-btn" value="Verzend">
        </div>
    </form>
@endsection
