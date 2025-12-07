@extends('layout.main')

@section('content')

<div class="max-w-4xl mx-auto bg-white shadow-xl rounded-xl p-8">

    <h2 class="text-3xl font-bold text-blue-600 mb-6">
        Detail Foto
    </h2>

    <div class="mb-6">
        <img
            src="{{ asset('storage/' . $foto->file_path) }}"
            alt="{{ $foto->judul }}"
            class="w-full h-auto rounded-xl shadow-lg"
        >
    </div>

    <div class="space-y-3 text-lg">

        <p>
            <span class="font-semibold text-gray-700">Judul:</span>
            {{ $foto->judul }}
        </p>

        <p>
            <span class="font-semibold text-gray-700">Deskripsi:</span> <br>
            <span class="text-gray-600">{{ $foto->deskripsi }}</span>
        </p>

        <p>
            <span class="font-semibold text-gray-700">Kategori:</span>
            <span class="text-blue-600 font-medium">
                {{ $foto->kategori->nama_kategori }}
            </span>
        </p>

        <p>
            <span class="font-semibold text-gray-700">Fotografer:</span>
            <span class="text-blue-600 font-medium">
                {{ $foto->fotografer->nama_fotografer }}
            </span>
        </p>

        <p>
            <span class="font-semibold text-gray-700">Tanggal Upload:</span>
            {{ $foto->created_at->format('d M Y') }}
        </p>

    </div>

    <div class="mt-8 flex gap-4">

        <a href="{{ route('foto.index') }}"
            class="px-5 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700">
            Kembali
        </a>

        <a href="{{ route('foto.edit', $foto->id) }}"
            class="px-5 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600">
            Edit
        </a>

        <form action="{{ route('foto.destroy', $foto->id) }}" method="POST"
              onsubmit="return confirm('Hapus foto ini?')">
            @csrf
            @method('DELETE')

            <button type="submit" class="px-5 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                Hapus
            </button>
        </form>

    </div>

</div>

@endsection
