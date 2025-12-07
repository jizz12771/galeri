@extends('layout.main')

@section('title', 'Daftar Fotografer')

@section('content')
<div class="max-w-5xl mx-auto">

    <h2 class="text-3xl font-extrabold mb-8 text-white drop-shadow-lg">
        👤 Daftar Fotografer
    </h2>

    <div class="mb-6">
        <a href="{{ route('fotografer.create') }}"
           class="px-5 py-3 bg-blue-600 hover:bg-blue-500 text-white font-semibold rounded-xl shadow-lg transition">
            + Tambah Fotografer
        </a>
    </div>

    @unless(count($fotografer))
        <p class="text-gray-200 text-lg">Belum ada fotografer.</p>
    @else

    <div class="bg-white/10 backdrop-blur-md rounded-2xl shadow-2xl overflow-hidden">
        <table class="w-full text-left text-white">
            <thead>
                <tr class="bg-white/10 border-b border-white/20">
                    <th class="p-4 font-semibold">ID</th>
                    <th class="p-4 font-semibold">Nama</th>
                    <th class="p-4 font-semibold">Email</th>
                    <th class="p-4 font-semibold">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach($fotografer as $item)
                <tr class="border-b border-white/10 hover:bg-white/5 transition">
                    <td class="p-4 text-gray-900 ">{{ $item->id }}</td>
                    <td class="p-4 text-gray-900 ">{{ $item->nama_fotografer }}</td>

                    <td class="p-4 flex gap-5">

                        <a href="{{ route('fotografer.edit', $item->id) }}"
                           class="text-yellow-300 hover:text-yellow-200 font-medium">
                            Edit
                        </a>

                        <form action="{{ route('fotografer.destroy', $item->id) }}"
                              method="POST"
                              onsubmit="return confirm('Hapus fotografer ini?')">

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
