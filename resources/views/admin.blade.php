@extends('layout.master')

@section('content')
    <div class="h-screen">
        <h1 class="text-xl mt-12 text-center">Admin</h1>
        <div class="grid grid-cols-4">
            <ul>
                <li>
                    <a href="{{route('productDelete')}}" class="rounded mx-8 text-black" aria-current="page">DELETE</a>
                </li>
                <li>
                    <a href="{{route('productAdd')}}" class="rounded mx-8 text-black"
                       aria-current="page">ADD</a>
                </li>
                <li>
                    <a href="{{route('newsAdd')}}"
                       class="rounded ml-8 text-black" aria-current="page">NEWS ADD</a>
                </li>
                <li>
                    <a href="{{route('newsDelete')}}" class="rounded mx-8 text-black" aria-current="page">NEWS
                        DELETE</a>
                </li>
                <li>
                    <a href="{{route('updateProduct')}}" class="rounded mx-8 text-black" aria-current="page">Update
                        Product </a>
                </li>
                <li>
                    <a href="{{route('updateNews')}}" class="rounded mx-8 text-black" aria-current="page">Update
                        News</a>
                </li>
            </ul>
        </div>
    </div>

@endsection
