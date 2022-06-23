@extends('layout.master')

@section('content')
    <h1 class="text-xl mt-12 text-center">{{$news['title']}}</h1>

    <div class="flex justify-center bg-slate-50 mt-12 rounded-xl dark:bg-slate-800/25 h-screen ">
        <div class="rounded-xl mb-8">
            <div class="w-80 h-80 shrink-0">
                <div class="text-center mt-2">{{$news['contents']}}
                </div>
                <div class="text-center mt-2">{{$news['created_at']}} €</div>
                @if(\Illuminate\Support\Facades\URL::previous() === request()->url())
                    <a href="{{route('home') }}">Zurück</a>
                @else
                    <a href="{{\Illuminate\Support\Facades\URL::previous()}}">Zurück</a>
                @endif
            </div>
        </div>
    </div>
@endsection
