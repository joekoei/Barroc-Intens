@extends('layouts.base')

@section('content')
    <div class="bg-image row w-100 align-items-center">
        <div class="container text-center">
            <div class="align-middle">
                <h1 class="db-title db-color-yellow">Barroc Intens</h1>
                <p class="text-white fs-4">Het nummer 1 koffiemerk ter wereld</p>
                <div class="w-50 p-3 mx-auto d-flex justify-content-evenly db-margin-button">
                    <button class="db-btn">Koffie</button>
                    <button class="db-btn2">Machines</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Background image -->

    <!--  Wie zijn wij  -->
    <div class="container padding-bot-top">
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
