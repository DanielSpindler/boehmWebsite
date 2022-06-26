@extends('layout.master')

@section('content')
    <div class="h-screen">
        <h1 class="text-xl mt-12 text-center">Admin</h1>
        <ul class="flex flex-col w-2/5 mx-auto space-y-4 mt-12 text-center">
            <li class="bg-emerald-500 shadow-2xl rounded-full p-2 py-4">
                <a href="{{route('productDelete')}}" class="rounded text-black " aria-current="page">Produkt
                    Löschen</a>
            </li>
            <li class="bg-emerald-500 shadow-2xl rounded-full p-2 py-4">
                <a href="{{route('productAdd')}}" class="rounded text-black "
                   aria-current="page">Produkt Hinzufügen</a>
            </li>
            <li class="bg-emerald-500 shadow-2xl rounded-full p-2 py-4">
                <a href="{{route('updateProduct')}}" class="rounded text-black " aria-current="page">Produkt
                    Updaten</a>
            </li>
            <li class="bg-emerald-500 shadow-2xl rounded-full p-2 py-4">
                <a href="{{route('newsAdd')}}"
                   class="rounded text-black " aria-current="page">News Hinzufügen</a>
            </li>
            <li class="bg-emerald-500 shadow-2xl rounded-full p-2 py-4">
                <a href="{{route('newsDelete')}}" class="rounded text-black " aria-current="page">News
                    Löschen</a>
            </li>
            <li class="bg-emerald-500 shadow-2xl rounded-full p-2 py-4">
                <a href="{{route('updateNews')}}" class="rounded text-black " aria-current="page">News Updaten</a>
            </li>
        </ul>
    </div>

@endsection
