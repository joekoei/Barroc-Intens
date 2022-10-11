@extends('layouts.base')

@section('content')
    <div class="container">
        <div id="example-div" class="bg-info border border-secondary d-flex aligns-items-center justify-content-center">
            <form class="row g-3">
                <div class="col-12">
                    <label for="name" class="form-label">Name customer:</label>
                    <input type="text" class="form-control" id="inputName" placeholder="Jan Janssen">
                </div>
                <div class="col-12">
                    <label for="contracts-time" class="form-label">Time:</label>
                    <select id="contracts-time" class="form-select">
                        <option selected>Choose...</option>
                        <option value="maandelijks">Maandelijks</option>
                        <option value="jaarlijks">Jaarlijks</option>
                    </select>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="bkrCheck">
                        <label class="form-check-label" for="bkrCheck">
                            Bkr check completed
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
        </div>
    </div>
@endsection
