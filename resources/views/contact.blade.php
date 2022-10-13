@extends('layouts.base')
@section('content')
    <div class="bg-image row w-100 align-items-center">
        <div class="align-middle">
                <div class="container text-center">
                    <h1 class="db-title db-color-yellow">Barroc Intens</h1>
                    <p class="text-white fs-4">Het nummer 1 koffiemerk ter wereld</p>
                    <div class="w-50 p-3 mx-auto d-flex justify-content-evenly db-margin-button">
                </div>
            </div>
        </div>
    </div>
<div class="container w-50">
    <form action="{{route('contact.store')}}" method="post">
        @csrf
        <div class="row">
            <h1>Contact Formulier</h1>
            <div class="col-md-6">
                <label class="form-label" for="emailInput">Email:</label>
                <input class="form-control" type="text" value="" name="email" id="emailInput">
                <div id="emailHelpBlock" class="form-text">
                    Voer hier je email in.
                </div>
            </div>
            <br>
            <div class="col-md-6">
                <label  class="form-label" for="aanhefInput">Aanhef:</label>
                <select class="form-control" id="aanhefInput" name="aanhef">
                    <option value="">Kies een aanhef</option>
                    <option value="Dhr.">Dhr.</option>
                    <option value="Mevr.">Mevr.</option>
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <label  for="firstNameInput">Voornaam:</label>
                <input class="form-control" type="text" id="firstNameInput" name="firstname">
            </div>
            <br>
            <div class="col-md-6">
                <label for="lastNameInput">Achternaam:</label>
                <input class="form-control" type="text" name="lastname" id="lastNameInput">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <label for="lastNameInput">Onderwerp:</label>
                <input class="form-control" type="text" name="subject" id="lastNameInput">
            </div>
        </div>
        <div class="col-12">
            <label for="textBoxInput">Reden voor contact:</label>
            <br>
            <textarea class="form-control" name="reasoncontact" id="" cols="30" rows="10"></textarea>
        </div>
        <br>
        <div>
            <input type="submit" class="db-btn" value="Verzend">
        </div>
    </form>
@endsection
