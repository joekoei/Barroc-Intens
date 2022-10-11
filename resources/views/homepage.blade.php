@extends('layouts.base')

@section('content')
    <!-- Background image -->
    <div class="bg-image" style="background-image: url('{{asset('img/banner-BG.jpg')}}');height: 80vh; background-size: cover; background-position: center center">
        <h1>test</h1>
    </div>
    <!-- Background image -->

    <!--  Wie zijn wij  -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm">
                <img src="{{asset('img/logo1_groot.png')}}" alt="wiezijnwij">
            </div>
            <div class="col-sm">
                <h2>Wie zijn  wij?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A at, aut autem commodi, dolorum enim ex, laboriosam laborum minima modi molestias nobis repellendus repudiandae sequi similique sit temporibus veritatis. Voluptatem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, itaque minima! Ab illo libero molestias mollitia natus quis totam voluptatem? Commodi et eum ex excepturi labore officia porro reprehenderit tenetur.</p>
            </div>
        </div>
    </div>
    <!--  Wie zijn wij  -->


@endsection
