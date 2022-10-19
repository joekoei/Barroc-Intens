@extends('layouts.base')
@section('content')
    <div class="bg-image w-100 align-items-center">
        <nav class="container">
            <div class="row pt-3 w-100">
                <div class="col-sm px-2 py-2">
                    <img src="{{asset('img/logo5_klein.png')}}" alt="Logo">
                </div>
                <div class="col-lg d-flex justify-content-between px-2 py-2 ">
                    <a class="nav-item nav-link text-white" href="{{route('homepage')}}">Home</a>
                    <a class="nav-item nav-link text-white" href="{{route('products')}}">Products</a>
                    <a class="nav-item nav-link text-white" href="">Home</a>
                    <a class="nav-item nav-link text-white" href="">Home</a>
                </div>
                <div class="col-sm d-flex justify-content-end p-0">
                    @if (Route::has('login'))
                        <div class="hidden fixed px-2 py-2 sm:block">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 db-link"><i class='bx bxs-user'></i>Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 db-link">Log in</a>
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
            <div class="container text-center">
                <div class="align-middle" data-aos="fade-up">
                    <h1 class="db-title db-color-yellow">Barroc Intens</h1>
                    <p class="text-white fs-4">Het nummer 1 koffiemerk ter wereld</p>
                    <div class="w-50 p-3 mx-auto d-flex justify-content-evenly db-margin-button">
                        <button class="db-btn">Koffie</button>
                        <a href="{{route('products')}}"><button class="db-btn2" >Machines</button></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    </div>

    <!--  Wie zijn wij  -->
    <div class="container padding-bot-top">
        <div class="row db-margin gx-5" data-aos="zoom-in" data-aos-duration="1000">
            <div class="col-sm-4">
                <img class="db-imgwidth" src="{{asset('img/logo1_groot.png')}}" alt="wiezijnwij">
            </div>
            <div class="col-sm-8">
                <h2 class="db-subtitle">Wie zijn  wij?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A at, aut autem commodi, dolorum enim ex, laboriosam laborum minima modi molestias nobis repellendus repudiandae sequi similique sit temporibus veritatis. Voluptatem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, itaque minima! Ab illo libero molestias mollitia natus quis totam voluptatem? Commodi et eum ex excepturi labore officia porro reprehenderit tenetur.</p>
            </div>
        </div>
            <div class="row db-margin gx-5" data-aos="zoom-in" data-aos-duration="1000">
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

    <!-- Quote + Button -->
    <div class="sectie4">
        <div class="db-quote text-center">
            <div class="container">
                <h1 class="text-center pt-4" data-aos="fade-up" data-aos-duration="1000">"A bad day with coffee is better than a good day without it."</h1>
                <div data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                    <a class="pl-4 pr-4 btn btn-outline-dark text-black rounded-lg" href="#">Bekijk onze machines</a>

                </div>
            </div>
        </div>
    </div>
    <!-- Quote + Button -->

    <!--  Werkwijze  -->
    <div class="container padding-bot-top" data-aos="fade-up" data-aos-duration="1000">
        <div class="row gx-5">
            <div class="col-sm-7">
                <h2 class="db-contactText">Werk wijze</h2>natus quis totam voluptatem? Commodi et eum ex excepturi labore officia porro reprehenderit tenetur.</p>
            </div>
            <div class="col-sm-5">
                <img class="db-imgwidth" src="{{asset('img/logo1_groot.png')}}" alt="wiezijnwij">
            </div>
        </div>
    </div>
    <!--  Werkwijze  -->

    {{--    Contact--}}
    <div class="db-background-gray" data-aos="fade-up" data-aos-duration="1000">
        <div class="container padding-bot-top">
            <div class="row gx-5 align-items-center">
                <div class="col-sm-7 text-white">
                    <h2 class="db-subtitle">Heb je een vraag? Neem contact met ons op!</h2>
                </div>
                <div class="col-sm-5 p-5 bg-white">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Naam</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">

                            <label class="mt-3 mb-2">Vraag</label>
                            <textarea class="form-control" aria-label="With textarea"></textarea>
                        </div>
                        <button type="submit" class="db-btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    {{--contact--}}

    <!-- Categorie -->
    <div class="sectie-categorie">
        <div class="container" data-aos="fade-up" data-aos-duration="1000">
            <div class="row d-flex text-white gx-5">
                <div class="col-sm text-center db-horeca">
                    <h3>Horeca</h3>
                </div>
                <div class="col-sm text-center db-office">
                    <h3>Kantoor</h3>
                </div>
                <div class="col-sm text-center db-home">
                    <h3>Thuis</h3>
                </div>
            </div
        </div>
    </div>
    <!-- Categorie -->


@endsection

