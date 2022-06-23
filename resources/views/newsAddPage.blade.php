@extends('layout.master')

@section('content')
    <h1 class="text-xl mt-12 text-center">News Hinzufügen</h1>
    <form method="post">
        @csrf
        <h1 class="text-xl mt-12 text-center">
            <input name="title" type="text" placeholder="Titel" required>
        </h1>
        <div class="flex justify-center mt-12 rounded-xl dark:bg-slate-800/25 h-screen ">
            <div class="rounded-xl mb-8">
                <div class="w-80 h-80 shrink-0">
                    <div class="text-center mt-2">
                        <input name="contents" type="text" placeholder="Inhalt" required>
                    </div>
                    <input type="submit" class="">
                    @if(\Illuminate\Support\Facades\URL::previous() === request()->url())
                        <a href="{{route('home') }}">Zurück</a>
                    @else
                        <a href="{{\Illuminate\Support\Facades\URL::previous()}}">Zurück</a>
                    @endif
                </div>
            </div>
        </div>
    </form>
@endsection

