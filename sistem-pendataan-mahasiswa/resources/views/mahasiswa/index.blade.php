<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-gray-800 p-6 shadow-lg rounded-xl border border-gray-700 overflow-hidden">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-bold text-white">Data Seluruh Mahasiswa</h2>
                    <a href="{{ route('dashboard') }}"
                        class="bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded-lg text-sm transition">
                        + Tambah Data
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left text-gray-300">
                        <thead class="bg-gray-700 text-gray-100 uppercase text-sm">
                            <tr>
                                <th class="p-4">NIM</th>
                                <th class="p-4">Nama</th>
                                <th class="p-4">Jurusan</th>
                                <th class="p-4 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-700">
                            @forelse ($mahasiswas as $m)
                                <tr class="hover:bg-gray-700 transition">
                                    <td class="p-4">{{ $m->nim }}</td>
                                    <td class="p-4">{{ $m->nama }}</td>
                                    <td class="p-4">{{ $m->jurusan }}</td>
                                    <td class="p-4 text-center">
                                        <div class="flex justify-center gap-2">
                                            <a href="{{ route('mahasiswa.edit', $m->id) }}"
                                                class="bg-yellow-600 hover:bg-yellow-500 text-white px-3 py-1 rounded text-xs transition">
                                                Edit
                                            </a>
                                            <form action="{{ route('mahasiswa.destroy', $m->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf @method('DELETE')
                                                <button type="submit"
                                                    class="bg-red-600 hover:bg-red-500 text-white px-3 py-1 rounded text-xs transition"
                                                    onclick="return confirm('Yakin hapus?')">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="p-8 text-center text-gray-500">
                                        Belum ada data mahasiswa yang tersimpan.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
