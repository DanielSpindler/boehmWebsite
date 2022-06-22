@extends('layout.master')

@section('content')
    <section class="text-gray-700 body-font overflow-hidden bg-white h-screen">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200" src="../test-dominik.jpeg">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest">BRAND NAME</h2>
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{$product['name']}}</h1>
                    <div class="flex mb-4">
                    </div>
                    <p class="leading-relaxed">{{$product['description']}}</p>
                    <div class="flex mt-10">
                        <span class="title-font font-medium text-2xl text-gray-900">{{$product['price']}} €</span>
                        <button class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded">Kaufen</button>
                    </div>
                    <span class="title-font font-medium text-2xl text-gray-900">Bestand: {{$product['stock']}}</span>

                </div>
                @if(\Illuminate\Support\Facades\URL::previous() === request()->url())
                    <a href="{{route('products') }}">Zurück</a>
                @else
                    <a href="{{\Illuminate\Support\Facades\URL::previous()}}">Zurück</a>
                @endif
            </div>
        </div>
    </section>
@endsection
