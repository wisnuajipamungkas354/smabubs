<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
        <title>{{ $title ?? 'Page Title' }}</title>

        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        {{-- Icons --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

        <style>
          * {
            font-family: "Poppins", sans-serif;
          }
        </style>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body>
        <header class="w-full flex px-4 md:px-12 py-6">
          <div class="mx-auto w-full md:max-w-[1024px] lg:max-w-[1200px] flex justify-between items-center">
            <div>
              <a class="font-extrabold text-2xl text-accent-content"><span class="text-[#008080]">SMA</span>BUBS</a>
            </div>

            {{-- Desktop Version --}}
            <nav class="hidden md:block">
              <ul class="flex gap-6">
                <li><a>Beranda</a></li>
                <li><a>Tentang Kami</a></li>
                <li><a>PPDB</a></li>
              </ul>
            </nav>
            <div class="hidden md:block">
              <button class="bg-[#008080] rounded-full px-6 py-3 text-white">Contact</button>
            </div>

            {{-- Mobile Version --}}
            <div class="block md:hidden">
              <button class="text-3xl p-1">
                <i class="bi bi-list"></i>
              </button>
            </div>
          </div>
        </header>
        <main class="w-full flex md:px-12 py-6">
          {{ $slot }}
        </main>
        <footer>

        </footer>

        @livewireScripts
    </body>
</html>