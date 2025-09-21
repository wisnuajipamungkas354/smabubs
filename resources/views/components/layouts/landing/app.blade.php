<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
        <title>{{ $title ?? config('app.name') }}</title>

        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        {{-- Icons --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        <link rel="icon" href={{ asset('logo.webp') }} style="image/x-icon" />

        <style>
          * {
            font-family: "Poppins", sans-serif;
          }
          .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 22px;
            width: 20rem;
            height: 20rem;
            overflow: hidden;
          }
        </style>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles

        <script>
          // Cek localStorage agar preferensi tersimpan
          if (
            localStorage.theme === 'dark' ||
            (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)
          ) {
            document.documentElement.classList.add('dark')
          } else {
            document.documentElement.classList.remove('dark')
          }
        </script>
    </head>
    <body class="dark:bg-black">
        <header class="w-full flex px-4 md:px-12 py-6 relative">
          <div class="mx-auto w-full md:max-w-[1024px] lg:max-w-[1200px] flex justify-between items-center">
            <div>
              <a class="font-extrabold text-2xl text-accent-content"><span class="text-[#008080]">SMA</span>BUBS</a>
            </div>

            {{-- Desktop Version --}}
            <nav class="hidden md:block">
              <ul class="flex gap-6 dark:text-white font-medium">
                <li class="text-[#008080]"><a>Beranda</a></li>
                <li><a>Tentang Kami</a></li>
                <li><a>PPDB</a></li>
              </ul>
            </nav>
            <div class="hidden md:block">
              <button id="mode" class="bg-[#008080] hover:bg-[#006666] rounded-full px-4 py-2 text-white flex justify-center items-center cursor-pointer">
                <i id="icon-mode" class="bi bi-brightness-high text-xl"></i>
              </button>
            </div>

            {{-- Mobile Version --}}
            <div class="block md:hidden">
              <button class="text-3xl p-1 dark:text-white">
                <i class="bi bi-list"></i>
              </button>
            </div>
          </div>
        </header>
        <main class="w-full flex md:px-12 overflow-x-hidden mb-20">
          {{ $slot }}
        </main>
        <footer class="w-full flex p-4 md:p-12 overflow-x-hidden bg-[#008080]">
          <div class="mx-auto w-full md:max-w-[1024px] lg:max-w-[1200px] flex flex-col gap-6 md:flex-row md:justify-between md:items-center">
            <div class="w-full md:w-[60%]">
              <h3 class="text-white font-bold text-2xl">SMABUBS</h3>
              <span class="text-gray-200 dark:text-gray-50 flex items-center gap-3 mt-3">
                <i class="bi bi-envelope-at-fill text-xl"></i>
                <p class="dark:text-gray-50">smabubs@smabubs.ac.id</p>
              </span>
              <span class="text-gray-200 flex items-center gap-3">
                <i class="bi bi-geo-alt-fill text-xl"></i>
                <p class="mt-3 dark:text-gray-50">Jl. Babakan Tamiang, RT 018 / RW 008, Kel. Lemahmulya, Kec. Majalaya, Kab. Karawang 41370</p>
              </span>
            </div>
            <div class="w-full mt-6 md:w-[40%] flex justify-center md:justify-end flex-col md:items-end">
              <span class="mx-auto md:m-0 text-4xl text-white flex gap-4 self-end">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-youtube"></i></a>
                <a href="#"><i class="bi bi-whatsapp"></i></a>
              </span>
              <p class="text-gray-200 dark:text-gray-50 text-center md:text-end mt-3">&copy; <span id="year"></span> SMA Baitul Ulya Boarding School. All right reserved</p>
            </div>
          </div>
        </footer>

        <script>
          document.addEventListener('DOMContentLoaded', () => {
            document.getElementById("year").textContent = new Date().getFullYear();
            buttonMode = document.getElementById("mode");
            iconButtonMode = document.getElementById("icon-mode");
            
            buttonMode.addEventListener('click', () => {
              document.documentElement.classList.toggle('dark');
              
                // Simpan preferensi ke localStorage
                if (document.documentElement.classList.contains('dark')) {
                  localStorage.setItem('theme', 'dark');
                  iconButtonMode.classList.add('bi-brightness-high');
                  iconButtonMode.classList.remove('bi-moon-fill');
                } else {
                  localStorage.setItem('theme', 'light');
                  iconButtonMode.classList.remove('bi-brightness-high');
                  iconButtonMode.classList.add('bi-moon-fill');
                }
            });
          });
        </script>
        @livewireScripts
        @stack('script')
    </body>
</html>