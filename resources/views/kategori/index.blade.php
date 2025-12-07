@extends('layout.main')

@section('title', 'Daftar Kategori Foto')

@section('content')
<div class="max-w-5xl mx-auto">

    <h2 class="text-3xl font-extrabold mb-8 text-white drop-shadow-lg">
        🗂️ Daftar Kategori Foto
    </h2>

    <div class="mb-6">
        <a href="{{ route('kategori_foto.create') }}"
           class="px-5 py-3 bg-blue-600 hover:bg-blue-500 text-white font-semibold rounded-xl shadow-lg transition">
            + Tambah Kategori
        </a>
    </div>

    @unless(count($kategori))
<<<<<<< HEAD
        <p class="text-cyan-300 text-lg">Belum ada kategori.</p>
=======
        <p class="text-gray-200 text-lg">Belum ada kategori.</p>
>>>>>>> a68c95a2ee154f4772bba76afbb7436ec1dbb284
    @else

    <div class="bg-white/10 backdrop-blur-md rounded-2xl shadow-2xl overflow-hidden">
        <table class="w-full text-left text-white">
            <thead>
                <tr class="bg-white/10 border-b border-white/20">
<<<<<<< HEAD
                    <th class="p-4 text-cyan-300 font-semibold">ID</th>
                    <th class="p-4 text-cyan-300 font-semibold">Nama Kategori</th>
=======
                    <th class="p-4 text-gray-900 font-semibold">ID</th>
                    <th class="p-4 text-gray-900 font-semibold">Nama Kategori</th>
>>>>>>> a68c95a2ee154f4772bba76afbb7436ec1dbb284
                    <th class="p-4 font-semibold">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach($kategori as $item)
                <tr class="border-b border-white/10 hover:bg-white/5 transition">
<<<<<<< HEAD
                    <td class="p-4 text-cyan-300 ">{{ $item->id }}</td>
                    <td class="p-4 text-cyan-300 ">{{ $item->nama_kategori }}</td>
=======
                    <td class="p-4 text-gray-900 ">{{ $item->id }}</td>
                    <td class="p-4 text-gray-900 ">{{ $item->nama_kategori }}</td>
>>>>>>> a68c95a2ee154f4772bba76afbb7436ec1dbb284

                    <td class="p-4 flex gap-5">

                        <a href="{{ route('kategori_foto.edit', $item->id) }}"
                           class="text-yellow-300 hover:text-yellow-200 font-medium">
                            Edit
                        </a>

                        <form action="{{ route('kategori_foto.destroy', $item->id) }}"
                              method="POST"
                              onsubmit="return confirm('Hapus kategori ini?')">

                            @csrf
                            @method('DELETE')

                            <button class="text-red-300 hover:text-red-200 font-medium">
                                Hapus
                            </button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @endunless

</div>
@endsection
