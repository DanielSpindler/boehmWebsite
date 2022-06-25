@extends('layout.master')

@section('content')
    <div class="h-screen overflow-auto">
        <div class="flex justify-center mt-24 mb-4 w-full">
            <div class="grid grid-cols-2 gap-48 rounded-xl">
                @foreach($products as $product)
                    <div class="w-80 hover:-translate-y-1 hover:scale-95 duration-300 h-auto shadow-2xl rounded-xl">
                        <div class="h-full">
                            <a href="{{route('singleProduct',$product->id)}}">
                                <img class="rounded-lg shadow-xl bg-white" src="../test-dominik.jpeg">
                            </a>
                            <div class="text-center mt-2 ">{{$product->name}}</div>
                            <div class="text-center mt-2">{{$product->price}} €</div>
                            <div class="text-center mt-2">Bestand: {{$product->stock}}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
