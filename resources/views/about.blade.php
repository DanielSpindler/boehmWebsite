@extends('layout.master')

@section('content')
    <div class="h-screen overflow-auto bg-slate-200">
        <div class="flex flex-row mb-2 mt-20">
            <img src="../360.JPG" class="rounded-full w-1/3 h-1/3 rounded-l shadow-2xl shadow-sky-600">
            <div class="w-1/3 h-1/3 text-center"><h1 class="underline">Was der Dominik dann so sagen möchte</h1>
                <p class=" ml-8 mt-8">
                    text der hier reingehört Lorem Ipsum
                </p></div>
            <img src="../360.JPG" class="rounded-l w-1/3 h-1/3 rounded-full shadow-2xl shadow-sky-600"
                 style="transform: scaleX(-1);">
        </div>
    </div>
@endsection
