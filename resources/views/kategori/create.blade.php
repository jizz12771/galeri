@extends('layout.main')

@section('content')

<<<<<<< HEAD
<h2 class="text-2xl font-bold mb-6 text-cyan-300">Tambah Kategori Foto</h2>

<form action="{{ route('kategori_foto.store') }}" method="POST" class="bg-blur-md p-6 rounded-lg shadow">
    @csrf

    <label class="block text-cyan-300 mb-2 font-semibold">Nama Kategori</label>
    <input type="text" name="nama_kategori"
           class="w-full border text-cyan-300 rounded-lg p-2 mb-4"
           placeholder="Contoh: Landscape, Portrait">

    <button class="px-4 py-2 bg-cyan-300 text-white rounded-lg">Simpan</button>
=======
<h2 class="text-2xl font-bold mb-6 text-blue-600">Tambah Kategori Foto</h2>

<form action="{{ route('kategori_foto.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow">
    @csrf

    <label class="block mb-2 font-semibold">Nama Kategori</label>
    <input type="text" name="nama_kategori"
           class="w-full border rounded-lg p-2 mb-4"
           placeholder="Contoh: Landscape, Portrait">

    <button class="px-4 py-2 bg-blue-600 text-white rounded-lg">Simpan</button>
>>>>>>> a68c95a2ee154f4772bba76afbb7436ec1dbb284
</form>

@endsection
