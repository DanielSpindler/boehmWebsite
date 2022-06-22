@extends('layout.master')

@section('content')
    <h1 class="text-xl mt-12 text-center">Produkt Löschen</h1>

    <div class="flex justify-center mt-12">
        <div class="grid grid-cols-3 gap-6 mb-12">
            @foreach($products as $product)

                <div class="w-80 h-120 shadow-2xl rounded-xl">
                    <img class="rounded-lg shadow-xl bg-white w-80 h-80" src="../../test-dominik.jpeg">
                    <form method="post" class="text-center">
                        @csrf
                    <div class=" text-center mt-2 "><input type="text" name="name" required value="{{$product->name}}"></div>
                    <div class=" text-center mt-2"><input type="number" name="price" required value="{{$product->price}}"></div>
                    <div class=" text-center mt-2"><input type="text" name="description" required value="{{$product->description}}"></div>
                    <div class=" text-center mt-2"><input type="number" name="stock" required value="{{$product->stock}}"></div>

                        <input type="hidden" name="id" value="{{$product->id}}" readonly>
                        <input type="submit" value="Ändern">
                    </form>
                </div>

            @endforeach

        </div>
    </div>
@endsection
