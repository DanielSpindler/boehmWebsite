@extends('layout.master')

@section('content')
    <div class="h-screen">
        <h1 class="text-xl mt-12 text-center">News Löschen</h1>
        <div class="flex justify-center mt-12">
            <div class="grid grid-cols-3 gap-6 mb-12">
                @foreach($news as $item)
                    <div
                        class="bg-white w-60 border-b-4 border-blue-500 h-full rounded-xl">
                        <div class="snap-center shrink-0 shadow-2xl rounded-xl h-full">
                            <div class="flex flex-col p-4 h-full md:p-6 justify-around">
                                <p class="text-blue-500 font-semibold text-xs mb-1 leading-none">News</p>
                                <h3 class="font-semibold mb-2 text-xl leading-tight sm:leading-normal">{{$item->title}}</h3>
                                <h3 class=" mb-2 text-xl leading-tight sm:leading-normal">{{$item->contents}}</h3>

                                <div class="">
                                    <svg class="opacity-75 inline align-baseline" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                                         x="0px" y="0px" width="12" height="12" viewBox="0 0 97.16 97.16"
                                         style="enable-background:new 0 0 97.16 97.16;" xml:space="preserve">
        <path
            d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823    c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z"/>
                                        <path
                                            d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832    c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z"/>
      </svg>
                                    <p class="leading-none inline-block">{{$item->created_at}}</p>

                                </div>
                                <form method="post" class="text-center">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$item->id}}" readonly>
                                    <input type="submit" class="hover:cursor-pointer" value="Löschen">
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
