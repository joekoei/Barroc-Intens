@extends('layouts.auth')
@section('content')
    <h2 class="text-center">Lease contract</h2>
    <div class="container">
        <form action="{{route('bkr.store')}}" method="post">
            <input type="hidden" name="subject" value="bkr-check">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="first">Name customer:</label>
                        <input type="text" class="form-control" placeholder="Jan Janssen" id="name" name="name">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="contracts-time" class="form-label">Time:</label>
                        <select id="contracts-time" class="form-select">
                            <option selected>Choose...</option>
                            <option value="maandelijks">Maandelijks</option>
                            <option value="jaarlijks">Jaarlijks</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="checkbox" name="bkrcheck_complete">
                        <label class="form-check-label" for="bkrCheck">
                            Bkr check completed
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="checkbox" id="flexSwitchCheckDefault" name="bkrcheck_result">
                        <label for="bkrCheck">
                            Is de bkr check positief?
                        </label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn-wide btn btn-success">Maak dit lease contract aan</button>
        </form>
    </div>
@endsection
