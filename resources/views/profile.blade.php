@extends('layouts.app')
@section('content')
<main>
    <div class="mx-auto pr-5 pl-1">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <h1 class="text-3xl font-semibold mb-4">Selamat datang di halaman profile, {{$username}}!</h1>

                <h3 class="text-lg font-semibold mb-4">Edit Profil</h3>
                <form action="/belum" method="POST" class="space-y-5 text-black">
                    <div class="flex w-full">
                        <div class="w-full">
                            <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">
                                Nama
                            </label>
                            <input type="text" id="nama" name="nama" placeholder="Nama" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" required />
                        </div>
                        <div class="w-full ml-5">
                            <label for="no_telepon" class="block text-sm font-medium text-gray-700 mb-1">
                                Nomor Telepon
                            </label>
                            <input type="text" id="no_telepon" name="no_telepon" placeholder="Nomor telepon" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" required />
                        </div>
                    </div>
                    <div class="w-full">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                            Email
                        </label>
                        <input type="email" id="email" name="email" placeholder="Email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" required />
                    </div>
                    <button type="submit" name="submit_aspirasi" class="w-full bg-green-700/80 hover:bg-green-700 text-white font-semibold py-2.5 rounded-lg transition duration-200 cursor-pointer">
                        Perbarui
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection