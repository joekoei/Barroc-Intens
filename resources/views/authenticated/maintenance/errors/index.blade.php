@extends('layouts.auth')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Afspraken</div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">Bedrijfsnaam</th>
                            <th class="text-center">Remark</th>
                            <th class="text-center">Aangemaakt op</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($meetings as $appointment)
                            <tr>
                                <td class="text-muted text-center">{{$appointment->company()->name}}</td>
                                <td class="text-muted text-center">{{$appointment->remark}}</td>
                                <td class="text-muted text-center">{{$appointment->created_at}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
