@extends('layouts.app')
@section('content')
<main>
    <div class="mx-auto pr-5 pl-3">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="overflow-x-auto border border-gray-200 rounded-xl">
                    <table class="min-w-full text-sm text-gray-700">
                        <thead class="bg-[#00B983] text-white uppercase text-xs font-semibold">
                            <tr>
                                <th class="px-4 py-3 text-left">No</th>
                                <th class="px-4 py-3 text-left">Nama</th>
                                <th class="px-4 py-3 text-left">Jenis Kelamin</th>
                                <th class="px-4 py-3 text-left">Tingkat Pendidikan</th>
                                <th class="px-4 py-3 text-left">Umur</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @forelse ($penduduks as $penduduk)
                                <tr class='hover:bg-gray-50'>
                                    <td class='px-4 py-3'>{{$loop->iteration}}</td>
                                    <td class='px-4 py-3'>{{$penduduk['nama']}}</td>
                                    <td class='px-4 py-3'>{{$penduduk['jk']}}</td>
                                    <td class='px-4 py-3'>{{$penduduk['tingkat_pendidikan']}}</td>
                                    <td class='px-4 py-3'>{{$penduduk['umur']}}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan='7' class='px-4 py-3 text-center text-gray-500'>Belum ada data penduduk</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection