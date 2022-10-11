@extends('layouts.base')

@section('content')
<div class="container">
    <form>
        @csrf
        <div class="col-12">
            <label class="form-label" for="emailInput">Email:</label>
            <input class="form-control" type="text" value="" id="emailInput">
            <div id="emailHelpBlock" class="form-text">
                Voer hier je email in.
            </div>
        </div>
        <br>
        <div class="col-12">
            <label class="form-label" for="aanhefInput">Aanhef:</label>
            <select class="form-control" id="aanhefInput">
                <option value="">Kies een aanhef</option>
                <option value="a">Dhr.</option>
                <option value="b">Mevr.</option>
            </select>
        </div>
        <br>
        <div class="col-12">
            <label for="firstNameInput">Voornaam:</label>
            <input class="form-control" type="text" id="firstNameInput">
        </div>
        <br>
        <div class="col-12">
            <label for="lastNameInput">Achternaam:</label>
            <input class="form-control" type="text" name="lastNameInput" id="lastNameInput">
        </div>
        <br>
        <div class="col-12">
            <label for="textBoxInput">Reden voor contact:</label>
            <br>
            <textarea class="form-control" name="textBoxInput" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Verzend</button>
        </div>
    </form>
</div>
@endsection
