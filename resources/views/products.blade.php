@extends('layout.master')

@section('content')
    <div class="h-screen overflow-auto">
        <div class="flex justify-center mt-24 mb-4 w-full">

                <div class="grid sm:grid-cols-2 grid-cols-1 lg:grid-cols-3 grid-cols-1 mx-4">
                    @foreach($products as $product)
                        <div class=" hover:-translate-y-1 hover:scale-95 duration-300 shadow-2xl ">
                            <div class="overflow-hidden sm:w-80 sm:h-120 w-64 h-60 overflow-hidden">
                                <a href="{{route('singleProduct',$product->id)}}" class="shadow-2xl">
                                    <div class="">
                                        <img class="shadow-xl bg-white object-cover"
                                             src="images/{{$product->image}}">
                                    </div>
                                </a>
                            </div>
                            <div class="text-center mt-2 ">{{$product->name}}</div>
                            <div class="text-center mt-2">{{$product->price}} €</div>
                            <div class="text-center mt-2">Bestand: {{$product->stock}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
