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

  <script>
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const sidebar = document.querySelector('.sidebar');

    hamburgerMenu.addEventListener('click', () => {
      sidebar.classList.toggle('hidden');
    });

    document.addEventListener('click', (e) => {
      if (!sidebar.contains(e.target) && !hamburgerMenu.contains(e.target)) {
        if (!sidebar.classList.contains('hidden') && window.innerWidth < 1024) {
          sidebar.classList.add('hidden');
        }
      }
    });
  </script>
</body>

</html>