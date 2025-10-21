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
    <main class="flex flex-col lg:flex-row p-3 sm:p-4 gap-4 sm:gap-6 lg:gap-0 min-h-screen">
        <aside class="w-full lg:w-1/2 h-auto lg:h-[96vh] flex flex-col justify-between rounded-xl sm:rounded-2xl bg-cover bg-center bg-[#047857] bg-[url('../assets/desa-asri.jpg')] bg-blend-soft-light py-8 sm:py-12 lg:py-0 px-4 sm:px-8 lg:px-20">
            <div class="text-white lg:pt-24">
                <h1 class="text-base sm:text-lg mb-2">SIPEDU</h1>
                <h3 class="text-xl sm:text-2xl lg:text-3xl font-semibold">Sistem Informasi Manajemen Penduduk</h3>
            </div>
            <div class="text-white text-xs sm:text-sm lg:pb-12">
                <p>KEBIJAKAN • KEAMANAN DATA</p>
            </div>
        </aside>
        <aside class="w-full lg:w-1/2 flex flex-col justify-center px-4 sm:px-8 md:px-16 lg:px-20 py-8 sm:py-12 lg:py-0">
            <div class="max-w-md lg:max-w-full mx-auto w-full lg:mx-0">
                <h1 class="text-xl sm:text-2xl font-semibold mb-2">Login</h1>
                <p class="text-sm sm:text-base text-black/80 mb-6 sm:mb-8">Silahkan login ke akun kamu untuk mengakses fitur-fitur keren!</p>
                <form action="/auth/login" method="POST" class="space-y-4 sm:space-y-5">
                    @csrf
                    <div class="mb-4 sm:mb-5">
                        <label for="username" class="font-medium text-black text-sm sm:text-base">Username</label>
                        <input type="text" name="username" id="username" class="block w-full border mt-2 py-2 px-3 rounded-lg text-sm sm:text-base focus:ring-2 focus:ring-[#00B983] focus:outline-none" required>
                    </div>
                    <div class="block mb-6 sm:mb-8">
                        <label for="password" class="font-medium text-black text-sm sm:text-base">Password</label>
                        <input type="password" name="password" id="password" class="block w-full border mt-2 py-2 px-3 rounded-lg text-sm sm:text-base focus:ring-2 focus:ring-[#00B983] focus:outline-none">
                    </div>
                    <button type="submit" class="w-full bg-[#00B983] hover:bg-[#009970] text-white py-3 sm:py-4 font-medium rounded-lg transition duration-200 cursor-pointer text-sm sm:text-base">Login</button>
                </form>
            </div>
        </aside>
    </main>
</body>
</html>
