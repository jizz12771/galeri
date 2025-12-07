@extends('layout.main')

@section('content')
<h2 class="text-2xl font-bold mb-4">Tambah Fotografer</h2>

<form action="{{ route('fotografer.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow">
    @csrf

    <label class="block mb-2 font-semibold">Nama Fotografer</label>
    <input type="text" name="nama_fotografer" class="w-full border rounded-lg p-2 mb-4">

    <button class="px-4 py-2 bg-blue-600 text-white rounded-lg">Simpan</button>
</form>
@endsection
