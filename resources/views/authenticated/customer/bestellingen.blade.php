@extends('layouts.auth')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Mijn bestellingen
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">Bestellingen</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-muted text-center"> U heeft nog geen bestellingen </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
