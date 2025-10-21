@extends('layouts.app')
@section('content')
<main>
    <div class="mx-auto pr-5 pl-1">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <h1 class="text-3xl font-semibold mb-4">Selamat datang, {{$username}}!</h1>

                <div class="border border-gray-300 bg-white w-[220px] text-center py-6 rounded-xl">
                    <p class="mb-3 text-xl font-semibold">Total Penduduk</p>
                    <p class="text-xl">{{$penduduk_count}}</p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection