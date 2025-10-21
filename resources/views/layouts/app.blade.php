<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIPEDU</title>
    @vite('resources/css/app.css')
  </head>
  <body>
    <div class="flex h-screen overflow-hidden">
      @include('components.sidebar')
      <aside class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto bg-[#f9fafb]">
        @include('components.navbar')
        @yield('content')
        @include('components.footer')
      </aside>
    </div>
  </body>
</html>