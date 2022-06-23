@extends('layout.master')

@section('content')
    <div class="h-screen overflow-auto">
        <h1 class="text-xl mt-12 text-center">Produkt Löschen</h1>
        <div class="flex justify-center mt-12">
            <div class="grid grid-cols-3 gap-6 mb-12">
                @foreach($products as $product)
                    <div class="w-80 h-auto shadow-2xl rounded-xl">
                        <div class="h-full">
                            <a href="{{route('singleProduct',$product->id)}}">
                                <img class="rounded-lg shadow-xl bg-white" src="../test-dominik.jpeg">
                            </a>
                            <div class=" text-center mt-2 ">{{$product->name}}</div>
                            <div class=" text-center mt-2">{{$product->price}} €</div>
                            <div class=" text-center mt-2">Bestand: {{$product->stock}}</div>
                            <form method="post" class="flex justify-center">
                                @csrf
                                <input type="submit" class=" inline-flex items-center justify-center p-1 mb-2 mr-2 overflow-hidden
                        text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 cursor-pointer group-hover:from-cyan-500
                        group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4
                        focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800" value="Löschen">
                                <input type="hidden" name="id" value="{{$product->id}}" readonly>

                            </form>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
