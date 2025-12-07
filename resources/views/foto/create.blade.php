@extends('layout.main') {{-- ganti dengan layout yang kamu pakai, contoh: layout.main atau layout.app --}}

@section('title', 'Tambah Foto')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-10">
    <h1 class="text-2xl font-bold text-white mb-6">Tambah Foto</h1>

    <div class="bg-white/10 backdrop-blur-md rounded-xl p-6 shadow-lg">
        <form action="{{ route('foto.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label class="block text-sm text-white mb-1">Judul</label>
                <input type="text" name="judul" value="{{ old('judul') }}"
                       class="w-full px-3 py-2 rounded-md bg-white/20 text-white focus:outline-none" />
                @error('judul') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm text-white mb-1">Foto</label>
                <input type="file" name="file_path" accept="image/*"
                       class="w-full px-3 py-2 rounded-md bg-white/10 text-white" />
                @error('file_path') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm text-white mb-1">Kategori</label>
                <select name="kategori_id" class="w-full px-3 py-2 rounded-md bg-white/10 text-white">
                    <option value="">-- Pilih Kategori --</option>
                    @foreach($kategori as $k)
                        <option value="{{ $k->id }}" @selected(old('kategori_id') == $k->id)>{{ $k->nama_kategori }}</option>
                    @endforeach
                </select>
                @error('kategori_id') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mb-6">
                <label class="block text-sm text-white mb-1">Fotografer</label>
                <select name="fotografer_id" class="w-full px-3 py-2 rounded-md bg-white/10 text-white">
                    <option value="">-- Pilih Fotografer --</option>
                    @foreach($fotografer as $f)
                        <option value="{{ $f->id }}" @selected(old('fotografer_id') == $f->id)>{{ $f->nama_fotografer }}</option>
                    @endforeach
                </select>
                @error('fotografer_id') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="flex gap-3">
                <a href="{{ route('foto.index') }}" class="px-4 py-2 rounded-md bg-gray-400 text-black">Batal</a>
                <button type="submit" class="px-4 py-2 rounded-md bg-blue-500 text-white">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
