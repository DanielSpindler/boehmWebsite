@extends('layout.master')

@section('content')

    <form method="post">
        @csrf
        <section class="text-gray-700 body-font overflow-hidden bg-white h-screen">
            <div class="container px-5 py-24 mx-auto">
                <div class="lg:w-4/5 mx-auto flex flex-wrap">
                    <input name="img" type="file" class="border border-2 border-black w-80 h-80 " required>
                    <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                        <h2 class="text-sm title-font text-gray-500 tracking-widest">BRAND NAME</h2>
                        <h1 class="text-gray-900 text-3xl title-font font-medium mb-1"><input name="name" type="text"
                                                                                              placeholder="Bezeichnung"
                                                                                              required>
                        </h1>
                        <div class="flex mb-4">
                        </div>
                        <p class="leading-relaxed"><textarea  class="w-80 h-20 border border-2" name="description" type="text" placeholder="Beschreibung"
                                                              required></textarea>
                        </p>
                        <div class="flex">
                                <span class="title-font font-medium text-2xl text-gray-900"><input name="price"
                                                                                                   type="number"
                                                                                                   placeholder="Preis"
                                                                                                   required></span>

                        </div>
                        <span class="title-font font-medium text-2xl text-gray-900">Bestand: <input name="stock"
                                                                                                    type="text"
                                                                                                    placeholder="Bestand"
                                                                                                    required>
                            <input type="submit"
                                   class="flex mt-5 text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded">
</span>

                    </div>
                    @if(\Illuminate\Support\Facades\URL::previous() === request()->url())
                        <a href="{{route('products') }}">Zurück</a>
                    @else
                        <a href="{{\Illuminate\Support\Facades\URL::previous()}}">Zurück</a>
                    @endif
                </div>
            </div>
        </section>
    </form>

@endsection