@extends('layouts.base')
@include('parts.header')
@section('content')
    <!--  Wie zijn wij  -->
    <div class="container padding-bot-top">
        <div class="row db-margin gx-5">
            <div class="col-sm-4">
                <img class="db-imgwidth" src="{{asset('img/logo1_groot.png')}}" alt="wiezijnwij">
            </div>
            <div class="col-sm-8">
                <h2 class="db-subtitle">Wie zijn  wij?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A at, aut autem commodi, dolorum enim ex, laboriosam laborum minima modi molestias nobis repellendus repudiandae sequi similique sit temporibus veritatis. Voluptatem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, itaque minima! Ab illo libero molestias mollitia natus quis totam voluptatem? Commodi et eum ex excepturi labore officia porro reprehenderit tenetur.</p>
            </div>
        </div>
        <div class="row db-margin gx-5">
            <div class="col-sm-8">
                <h2 class="db-subtitle">Wie zijn  wij?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A at, aut autem commodi, dolorum enim ex, laboriosam laborum minima modi molestias nobis repellendus repudiandae sequi similique sit temporibus veritatis. Voluptatem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, itaque minima! Ab illo libero molestias mollitia natus quis totam voluptatem? Commodi et eum ex excepturi labore officia porro reprehenderit tenetur.</p>
            </div>
            <div class="col-sm-4">
                <img class="db-imgwidth" src="{{asset('img/logo1_groot.png')}}" alt="wiezijnwij">
            </div>
        </div>
    </div>
    <!--  Wie zijn wij  -->
@endsection
