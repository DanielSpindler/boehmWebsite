@extends('layout.master')

@section('content')
    <div class="h-screen overflow-auto">
        <div class="flex justify-center mt-12">
            <div class="rounded-xl w-4/5">
                <div class="rounded-xl mt-12">
                    <div class="w-full rounded-xl flex gap-3 snap-mandatory overflow-scroll">
                        @for($i = 0; $i < count($products); $i++)
                            <div
                                class="snap-center w-80 h-120 shrink-0  shadow-inner shadow-2xl shadow-sky-500 rounded-xl m-2 transition ease-in-out
                                 rounded-xl hover:-translate-y-1 hover:scale-95 duration-300">
                                <a href="{{route('singleProduct',$products[$i]->id)}}">
                                    <img class=" rounded-lg shadow-xl" src="test-dominik.jpeg">
                                </a>
                                <div class="text-center mt-2">{{$products[$i]->name}}
                                </div>
                                <div class="text-center mt-2">{{$products[$i]->price}} €</div>
                                <div class="text-center mt-2">Bestand: {{$products[$i]->stock}}</div>
                            </div>
                            @if($i === 5)
                                @php break; @endphp
                            @endif
                        @endfor
                    </div>
                </div>
            </div>

        </div>
        <div class="flex justify-center mt-12 mb-4">
            <div class="w-3/5 justify-center rounded-xl">
                <div class="flex gap-6 snap-mandatory overflow-x-scroll">
                    @foreach($news as $item)
                        <a href="{{route('singleNews',$item->id)}}"
                           class="last:mr-8 transition ease-in-out rounded-xl shadow-inner shadow-2xl shadow-sky-500 m-2 hover:-translate-y-1 hover:scale-95  duration-300">
                            <div
                                class="w-60  rounded-xl">
                                <div class="snap-center shrink-0 rounded-xl">
                                    <div class="flex flex-col p-4 md:p-6 justify-around">
                                        <p class="text-blue-500 font-semibold text-xs mb-1 leading-none">News</p>
                                        <h3 class="font-semibold mb-2 text-xl leading-tight sm:leading-normal hover:underline">{{$item->title}}</h3>
                                        <div class="">
                                            <svg class="opacity-75 inline align-baseline"
                                                 xmlns="http://www.w3.org/2000/svg"
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
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection




