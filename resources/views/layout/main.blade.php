<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Galeri Foto</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="relative text-gray-100 min-h-screen">

    <!-- BACKGROUND GAMBAR FIXED -->
    <div class="fixed inset-0 -z-10">
        <img src="{{ asset('22.jpg') }}"
             alt="Background"
             class="w-full h-full object-cover">
    </div>

    <!-- NAVBAR -->
    <nav class="backdrop-blur-md bg-white/10 border-b border-white/20 shadow-lg">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <h1 class="text-3xl font-extrabold text-blue-400 tracking-wide hover:text-blue-300 transition">
                Galeri Foto
            </h1>

            <ul class="flex gap-8 text-lg">
                <li>
                    <a href="{{ route('foto.index') }}"
                       class="hover:text-blue-400 transition hover:underline underline-offset-8">
                       Foto
                    </a>
                </li>
                <li>
                    <a href="{{ route('kategori_foto.index') }}"
                       class="hover:text-blue-400 transition hover:underline underline-offset-8">
                       Kategori
                    </a>
                </li>
                <li>
                    <a href="{{ route('fotografer.index') }}"
                       class="hover:text-blue-400 transition hover:underline underline-offset-8">
                       Fotografer
                    </a>
                </li>
            </ul>

            <a href="/admin"
               class="px-5 py-2 bg-blue-600 hover:bg-blue-500 transition rounded-xl shadow-lg text-white font-semibold">
                Login
            </a>
        </div>
    </nav>

    <!-- CONTENT -->
    <main class="max-w-7xl mx-auto px-6 py-10">
        @yield('content')
    </main>

</body>
</html>
