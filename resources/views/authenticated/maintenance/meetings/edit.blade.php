@extends('layouts.base')

@section('content')
    <div class="container">
        <form action="{{route('meetings.update', $meeting->id)}}" method="post">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="remark">Remark</label>
                <input type="text" class="form-control" name="remark" id="remark" value="{{$meeting->remark}}">
            </div>
            <div class="form-group">
                <label for="first">Bedrijf</label>
                <select class="form-select" name="comp" id="comp" value="{{$meeting->company_id}}">
                    <option selected>Choose...</option>
                    @foreach($companies as $comp)
                        <option value="{{$comp->id}}">{{$comp->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="form-check-label" for="date">Enter appointment date</label>
                <input type="date" class="form-select" id="date" name="date" value="{{$meeting->date_added}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
