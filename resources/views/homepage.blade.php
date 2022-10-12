@extends('layouts.base')

@section('content')
    <div class="bg-image w-100 align-items-center">
        <nav>
            <div class="row pt-3 w-100">
                <div class="col-sm px-2 py-2">
                    <img src="{{asset('img/logo5_klein.png')}}" alt="Logo">
                </div>
                <div class="col-lg d-flex justify-content-between px-2 py-2 ">
                    <a class="nav-item nav-link text-white" href="">Home</a>
                    <a class="nav-item nav-link text-white" href="">Home</a>
                    <a class="nav-item nav-link text-white" href="">Home</a>
                    <a class="nav-item nav-link text-white" href="">Home</a>
                </div>
                <div class="col-sm d-flex justify-content-end p-0">
                    @if (Route::has('login'))
                        <div class="hidden fixed px-2 py-2 sm:block">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </nav>
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

    <!--  Wie zijn wij  -->
    <div class="container padding-bot-top">
        <div class="row db-margin">
            <div class="col-sm-4">
                <img class="db-imgwidth" src="{{asset('img/logo1_groot.png')}}" alt="wiezijnwij">
            </div>
            <div class="col-sm-8">
                <h2>Wie zijn  wij?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A at, aut autem commodi, dolorum enim ex, laboriosam laborum minima modi molestias nobis repellendus repudiandae sequi similique sit temporibus veritatis. Voluptatem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, itaque minima! Ab illo libero molestias mollitia natus quis totam voluptatem? Commodi et eum ex excepturi labore officia porro reprehenderit tenetur.</p>
            </div>
        </div>
            <div class="row db-margin">
                <div class="col-sm-8">
                    <h2>Wie zijn  wij?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A at, aut autem commodi, dolorum enim ex, laboriosam laborum minima modi molestias nobis repellendus repudiandae sequi similique sit temporibus veritatis. Voluptatem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, itaque minima! Ab illo libero molestias mollitia natus quis totam voluptatem? Commodi et eum ex excepturi labore officia porro reprehenderit tenetur.</p>
                </div>
                <div class="col-sm-4">
                    <img class="db-imgwidth" src="{{asset('img/logo1_groot.png')}}" alt="wiezijnwij">
                </div>
            </div>
    </div>
    <!--  Wie zijn wij  -->

    <!--  Werkwijze  -->
    <div class="container padding-bot-top">
        <div class="row">
            <div class="col-sm">
                <h2>Werkwijze</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti earum fuga fugit impedit laboriosam libero magnam maiores, odit perspiciatis possimus quisquam reiciendis tempora voluptatum. Accusantium eius nam perspiciatis placeat quasi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet asperiores doloribus dolorum eos error, est excepturi inventore molestias nesciunt perferendis, praesentium recusandae ut voluptates. Ad explicabo fuga in laborum numquam!</p>
            </div>
            <div class="col-sm">
                <img src="{{asset('img/logo3_groot.png')}}" alt="wiezijnwij">
            </div>
        </div>
    </div>
    <!--  Werkwijze  -->

    <!-- Quote + Button -->
    <div class="sectie4">
        <div class="db-quote text-center">
            <div class="container">
                <h1 class="text-center pt-4">"A bad day with coffee is better than a good day without it."</h1>
                <a class="pl-4 pr-4 btn btn-outline-dark text-black rounded-lg " href="#">Bekijk onze machines</a>
            </div>
        </div>
    </div>
    <!-- Quote + Button -->

    <!-- Categorie -->
    <div class="sectie-categorie">
        <div class="container">
            <div class="row d-flex">
                <div class="col-sm text-center">
                    <img src="{{asset('img/logo5_groot.png')}}" alt="logo">
                </div>
                <div class="col-sm text-center">
                    <img src="{{asset('img/logo5_groot.png')}}" alt="logo">
                </div>
                <div class="col-sm text-center">
                    <img src="{{asset('img/logo5_groot.png')}}" alt="logo">
                </div>
            </div
        </div>
    </div>
    <!-- Categorie -->


@endsection
