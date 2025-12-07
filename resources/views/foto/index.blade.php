@extends('layout.main')

@section('title', 'Daftar Foto')

@section('content')
<div class="max-w-7xl mx-auto">

    <h2 class="text-3xl font-extrabold mb-8 text-white drop-shadow-lg">
        📸 Daftar Foto
    </h2>

    <div class="mb-6">
        <a href="{{ route('foto.create') }}"
           class="px-5 py-3 bg-blue-600 hover:bg-blue-500 text-white font-semibold rounded-xl shadow-lg transition">
            + Tambah Foto
        </a>
    </div>

    @unless(count($foto))
        <p class="text-gray-200 text-lg">Belum ada foto yang ditambahkan.</p>
    @else

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        @foreach($foto as $item)
        <div class="bg-white/10 backdrop-blur-md rounded-2xl overflow-hidden shadow-xl
                    hover:scale-[1.02] hover:shadow-2xl transition transform">

            <img src="{{ asset('storage/' . $item->file_path) }}"
                 onclick="openModal('{{ asset('storage/' . $item->file_path) }}')"
                 alt="{{ $item->judul }}"
                 class="w-full h-60 object-cover rounded-lg cursor-pointer hover:opacity-90 transition">

            <div class="p-5">

                <h3 class="text-xl font-bold text-white mb-2 drop-shadow">
                    {{ $item->judul }}
                </h3>

                <p class="text-gray-200 text-sm">
                    <span class="font-semibold text-blue-300">Kategori:</span>
                    {{ $item->kategori->nama_kategori ?? 'Tidak ada kategori' }}
                </p>

                <p class="text-gray-200 text-sm mt-1">
                    <span class="font-semibold text-blue-300">Fotografer:</span>
                   {{ $item->fotografer->nama_fotografer ?? 'Tidak ada fotografer' }}
                </p>

                <div class="flex justify-between mt-4">

                    <a href="{{ route('foto.show', $item->id) }}"
                       class="text-blue-300 hover:text-blue-200 font-medium">
                        Lihat
                    </a>

                    <a href="{{ route('foto.edit', $item->id) }}"
                       class="text-yellow-300 hover:text-yellow-200 font-medium">
                        Edit
                    </a>

                    <form action="{{ route('foto.destroy', $item->id) }}" method="POST"
                          onsubmit="return confirm('Hapus foto ini?')" class="inline">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-300 hover:text-red-200 font-medium">
                            Hapus
                        </button>
                    </form>

                </div>

            </div>
        </div>
        @endforeach

        <div id="photoModal" class="fixed inset-0 bg-black bg-opacity-80 hidden flex justify-center items-center z-50 px-4">
    <div class="relative">
         <button onclick="closeModal()"
            class="absolute -top-4 -right-4 bg-white text-black p-2 rounded-full shadow-xl hover:bg-gray-200">
            ✕
        </button>
        <img id="modalImage" class="max-h-[30vh] max-w-[30vw] rounded-lg shadow-xl">
        <button onclick="closeModal()"
                class="absolute -top-4 -right-4 bg-white text-black p-2 rounded-full shadow-xl hover:bg-gray-200">
            ✕
        </button>
    </div>
</id=>

<script>
    function openModal(src) {
        document.getElementById("modalImage").src = src;
        document.getElementById("photoModal").classList.remove("hidden");
    }

    function closeModal() {
        document.getElementById("photoModal").classList.add("hidden");
    }

    document.getElementById("photoModal").addEventListener("click", function (e) {
        if (e.target === this) closeModal();
    });
</script>

    @endunless
</div>
@endsection


