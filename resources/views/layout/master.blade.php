<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon"
          href="https://watchmecraft.com/_ipx/w_384,q_75/https%3A%2F%2Fwmc-euw.b-cdn.net%2Fprofile%2Fdb.custom.bikes%2Fprofile_pic.webp?url=https%3A%2F%2Fwmc-euw.b-cdn.net%2Fprofile%2Fdb.custom.bikes%2Fprofile_pic.webp&w=384&q=75">
    <script type="text/javascript" charset="UTF-8"
            src="//cdn.cookie-script.com/s/66663423d8010812e138d86e710651b2.js"></script>
    <title>DB Custom Bike's</title>
</head>
<body class=" opacity-[.98] w-screen h-screen"
      style="font-family: 'Gill Sans'; background-image: url('/IMG_8305.JPG')">
<header class="flex inline-block">
    <div class="flex flex-auto justify-center w-screen">
        <ul class="flex flex-row mx-auto my-auto font-normal opacity-[.80] bg-slate-100 p-4 pt-6 rounded-b fixed z-40 items-center pt">
            @if(\Illuminate\Support\Facades\Auth::user())
                <li class="">
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endif
            <li>
                <a href="{{route('home')}}" class="{{request()->is('/') ? 'bg-black text-white':''}} p-2 rounded ml-2 sm:mx-8
                 duration-300"
                   aria-current="page">Home</a>
            </li>
            <li>
                <a href="{{route('products')}}"
                   class="{{request()->is('products') ? 'bg-black text-white ':''}} p-2 rounded ml-2 sm:mx-8
                   duration-300"
                   aria-current="page">Produkte</a>
            </li>
            <li>
                <a href="{{route('about')}}"
                   class="{{request()->is('about') ? 'bg-black text-white ':''}} p-2 rounded ml-2 sm:mx-8
                   duration-300"
                   aria-current="page">About</a>
            </li>
            <li>
                <a href="mailto:bewerbung@daniel-spindler.de"
                   class="rounded sm:ml-8 text-black p-2
                    duration-300" aria-current="page">E-Mail</a>
            </li>
        </ul>
    </div>
</header>
<div class="flex justify-center rounded-xl my-4">
    <div class="text-black bg-slate-100 shadow-2xl lg:w-4/5 w-screen rounded-xl ">
        <a href="{{route('home')}}">
            <img
                src="https://watchmecraft.com/_ipx/w_384,q_75/https%3A%2F%2Fwmc-euw.b-cdn.net%2Fprofile%2Fdb.custom.bikes%2Fprofile_pic.webp?url=https%3A%2F%2Fwmc-euw.b-cdn.net%2Fprofile%2Fdb.custom.bikes%2Fprofile_pic.webp&w=384&q=75"
                width="50" height="50" class="rounded-full m-3 fixed hidden sm:flex">
        </a>
        @yield('content')
        <div class="z-50">
        </div>
    </div>
</div>
<footer class=" bg-white rounded-lg shadow flex items-center justify-between dark:bg-gray-800">
    <div class="">
        <img src="/InfoLogo.jpeg" width="320" height="160" class="object-cover">
    </div>
    <div class="p-4 pl-6 pr-6">
        <div style="background:linear-gradient(45deg, #405de6, #5851db, #833ab4, #c13584, #e1306c, #fd1d1d);"
             class="rounded-2xl">
            <a href="https://www.instagram.com/db.custom.bikes">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24">
                    <path
                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
            </a>
        </div>
    </div>
    <ul class="flex flex-wrap  items-center my-auto text-sm text-gray-500 dark:text-gray-400">
        <li>
            <a href="{{route('impressum')}}" class=" sm:mr-4 hover:underline md:mr-6 ">Impressum</a>
        </li>
        <li>
            <a href="#" class="sm:mr-4 hover:underline md:mr-6">Datenschutz</a>
        </li>
    </ul>
</footer>
</body>
</html>
