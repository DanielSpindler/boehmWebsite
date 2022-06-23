@extends('layout.master')

@section('content')
    <div class="h-screen overflow-auto">
        <h1 class="text-xl mt-12 text-center">Produkt Löschen</h1>
        <div class="flex justify-center mt-12">
            <div class="grid grid-cols-3 gap-6 mb-12">
                @foreach($products as $product)

                    <div class="w-80 h-120 shadow-2xl rounded-xl">
                        <img class="rounded-lg shadow-xl bg-white w-80 h-80" src="../../test-dominik.jpeg">
                        <form method="post" class="text-center">
                            @csrf
                            <div class=" text-center mt-2 "><input type="text" name="name" required
                                                                   value="{{$product->name}}"></div>
                            <div class=" text-center mt-2"><input type="number" name="price" required
                                                                  value="{{$product->price}}"></div>
                            <div class=" text-center mt-2"><input type="text" name="description" required
                                                                  value="{{$product->description}}"></div>
                            <div class=" text-center mt-2"><input type="number" name="stock" required
                                                                  value="{{$product->stock}}"></div>

                            <input type="hidden" name="id" value="{{$product->id}}" readonly>
                            <input type="submit" class="inline-flex items-center justify-center p-1 mb-2 mr-2 overflow-hidden
                text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 cursor-pointer group-hover:from-cyan-500
                group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4
                focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800" value="Ändern">
                        </form>
                    </div>

                @endforeach

            </div>
        </div>
    </div>
@endsection
