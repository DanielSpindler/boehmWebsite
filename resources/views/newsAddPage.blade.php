@extends('layout.master')

@section('content')
    <div class="h-screen">
        <h1 class="text-xl mt-12 text-center">News Hinzufügen</h1>
        <form method="post">
            @csrf
            <div class="flex justify-center rounded-xl">
                <div class="rounded-xl mb-8">
                    <div class="mt-12">
                        <div class="max-w-sm rounded overflow-hidden shadow-2xl bg-slate-200">
                            <h1 class="text-2xl mb-8 mt-2 font-bold text-center"></h1>
                            <div class="px-6 py-4">
                                <div class=" text-xl text-left mb-2"><input name="title" type="text" placeholder="Titel"
                                                                            required></div>
                                <textarea name="contents" type="text" placeholder="Inhalt" required></textarea>
                            </div>
                        </div>


                        <input type="submit">
                        @if(\Illuminate\Support\Facades\URL::previous() === request()->url())
                            <a href="{{route('home') }}" class="inline-flex items-center justify-center p-1 mb-2 mr-2 overflow-hidden
                        text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 cursor-pointer group-hover:from-cyan-500
                        group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4
                        focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">Zurück</a>
                        @else
                            <a href="{{\Illuminate\Support\Facades\URL::previous()}}" class="inline-flex items-center justify-center p-1 mb-2 mr-2 overflow-hidden
                        text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 cursor-pointer group-hover:from-cyan-500
                        group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4
                        focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">Zurück</a>
                        @endif
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

