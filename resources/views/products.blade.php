@extends('layout.master')

@section('content')
    <div class="h-screen overflow-auto">
        <h1 class="text-xl mt-12 text-center">Produkte</h1>
        <div class="flex justify-center mt-12 mb-4">
            <div class="grid grid-cols-3 gap-6 rounded-xl ">
                @foreach($products as $product)
                    <a href="{{route('singleProduct',$product->id)}}">
                        <div
                            class=" w-80 h-120 shrink-0 w-full shadow-2xl rounded-xl hover:-translate-y-1 hover:scale-95 hover:bg-slate-500 duration-300">
                            <img class="rounded-lg shadow-xl bg-white" src="test-dominik.jpeg">
                            <div class=" text-center mt-2 ">{{$product->name}}</div>
                            <div class=" text-center mt-2">{{$product->price}} €</div>
                            <div class=" text-center mt-2">Bestand: {{$product->stock}}</div>
                        </div>
                    </a>

                @endforeach
            </div>
        </div>
    </div>
@endsection
