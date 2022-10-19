<div class="bg-black w-100 align-items-center">
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
    </nav>
</div>
