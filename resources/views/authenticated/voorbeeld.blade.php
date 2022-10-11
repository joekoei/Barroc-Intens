@extends('layouts.auth')
@section('content')
    <h2 class="text-center">Maak een klant aan en sla deze op in ons systeem</h2>
    <div class="container">
        <form action="" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first">Eigenaar</label>
                        <input type="text" class="form-control" placeholder="" id="owner" name="owner">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="last">Bedrijfsnaam</label>
                        <input type="text" class="form-control" placeholder="" name="company">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="company">Plaats</label>
                        <input type="text" class="form-control" placeholder="" id="city" name="city">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone">Telefoonnummer</label>
                        <input type="tel" class="form-control" id="phone" placeholder="" name="phone">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="" name="email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="url">Website klant <small>Volledige link dus ook  https://</small></label>
                        <input type="url" class="form-control" id="url" placeholder="" name="website_url">
                    </div>

                </div>
            </div>
            <h3>Wordpress gegevens</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="url">Gebruikersnaam</label>
                        <input type="text" class="form-control" id="wp_user" placeholder="" name="wp_user">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="url">Wachtwoord</label>
                        <input type="text" class="form-control" id="wp_pass" placeholder="" name="wp_pass">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn-wide btn btn-success">Maak deze klant aan</button>
        </form>
    </div>
@endsection
