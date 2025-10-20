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
        <aside class="w-full h-[96vh] rounded-2xl bg-cover bg-center bg-[#047857] bg-[url('../assets/desa-asri.jpg')] bg-blend-soft-light">
            <p>Coba</p>
        </aside>
        <aside class="w-full">
            <h1>Login</h1>
            <p>Silahkan login ke akun kamu untuk mengakses fitur-fitur keren!</p>
            <form action="/auth/login" method="POST">
                @csrf
                <span>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                </span>
                <span>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </span>
                <button type="submit">Login</button>
            </form>
        </aside>
    </main>
</body>
</html>