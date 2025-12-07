@extends('layout.main')

@section('content')

<h2 class="text-2xl font-bold mb-6 text-blue-600">Tambah Kategori Foto</h2>

<form action="{{ route('kategori_foto.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow">
    @csrf

    <label class="block mb-2 font-semibold">Nama Kategori</label>
    <input type="text" name="nama_kategori"
           class="w-full border rounded-lg p-2 mb-4"
           placeholder="Contoh: Landscape, Portrait">

    <button class="px-4 py-2 bg-blue-600 text-white rounded-lg">Simpan</button>
</form>

@endsection
