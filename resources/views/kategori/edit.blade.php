@extends('layout.main')

@section('content')

<h2 class="text-2xl font-bold mb-6 text-blue-600">Edit Kategori</h2>

<form action="{{ route('kategori_foto.update', $kategori->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow">
    @csrf
    @method('PUT')

    <label class="block mb-2 font-semibold">Nama Kategori</label>
    <input type="text" name="nama_kategori"
           value="{{ $kategori->nama_kategori }}"
           class="w-full border rounded-lg p-2 mb-4">

    <button class="px-4 py-2 bg-blue-600 text-white rounded-lg">Update</button>
</form>

@endsection
