@extends('layout.master')

@section('content')
    <h1 class="text-xl mt-12 text-center">Produkt Löschen</h1>

    <div class="flex justify-center mt-12">
        <div class="grid grid-cols-3 gap-6 mb-12">
            @foreach($products as $product)
                <div class="w-80 h-120 shadow-2xl rounded-xl">
                    <a href="{{route('singleProduct',$product->id)}}">
                        <img class="rounded-lg shadow-xl bg-white" src="../test-dominik.jpeg">
                    </a>                    <div class=" text-center mt-2 ">{{$product->name}}</div>
                    <div class=" text-center mt-2">{{$product->price}} €</div>
                    <div class=" text-center mt-2">Bestand: {{$product->stock}}</div>
                    <form method="post" class="text-center">
                        @csrf
                        <input type="hidden" name="id" value="{{$product->id}}" readonly>
                        <input type="submit" value="Löschen">
                    </form>
                </div>
            @endforeach

        </div>
    </div>
@endsection
