<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>SIPEDU | LOGIN</title>
</head>
<body>
    <main class="flex p-4">
        <aside class="w-full h-[96vh] flex flex-col justify-between rounded-2xl bg-cover bg-center bg-[#047857] bg-[url('../assets/desa-asri.jpg')] bg-blend-soft-light">
            <div class="text-white pl-20 pt-24">
                <h1 class="text-lg mb-2">SIPEDU</h1>
                <h3 class="text-3xl font-semibold">Sistem Informasi Manajemen Penduduk</h3>
            </div>
            <div class="text-white pl-20 pb-12">
                <p>KEBIJAKAN • KEAMANAN DATA</p>
            </div>
        </aside>
        <aside class="w-full flex flex-col justify-center">
            <div class="px-32">
                <h1 class="text-2xl font-semibold mb-2">Login</h1>
                <p class="text-black/80 mb-4">Silahkan login ke akun kamu untuk mengakses fitur-fitur keren!</p>
                <form action="/auth/login" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="username" class="font-medium text-black">Username</label>
                        <input type="text" name="username" id="username" class="block w-full border mt-2 py-2 px-3 rounded-lg" required>
                    </div>
                    <div class="block">
                        <label for="password" class="font-medium text-black">Password</label>
                        <input type="password" name="password" id="password" class="block w-full border mt-2 py-2 px-3 rounded-lg">
                    </div>
                    <button type="submit" class="w-full bg-[#00B983] text-white py-4 font-medium rounded-lg mt-6 cursor-pointer">Login</button>
                </form>
            </div>
        </aside>
    </main>
</body>
</html>