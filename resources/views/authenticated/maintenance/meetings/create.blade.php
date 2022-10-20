@extends('layouts.base')

@section('content')
    <div class="container">
        <form action="{{route('meetings.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="remark">Remark</label>
                <input type="text" class="form-control" name="remark" id="remark">
            </div>
            <div class="form-group">
                <label for="first">Bedrijf</label>
                <select class="form-select" name="comp" id="comp">
                    <option selected>Choose...</option>
                    @foreach($companies as $comp)
                        <option value="{{$comp->id}}">{{$comp->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="form-check-label" for="date">Enter appointment date</label>
                <input type="date" class="form-select" id="date" name="date">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
