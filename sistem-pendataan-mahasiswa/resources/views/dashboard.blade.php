<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sistem Pendataan Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="max-w-2xl mx-auto">
                <div class="bg-gray-800 p-6 shadow-lg rounded-xl border border-gray-700">
                    <h2 class="text-xl font-bold text-white mb-4">Tambah Data Mahasiswa</h2>
                    <form action="{{ route('mahasiswa.store') }}" method="POST">
                        @csrf
                        <div class="space-y-4">
                            <input type="text" name="nim"
                                class="w-full bg-gray-700 text-white border-gray-600 rounded-lg" placeholder="NIM"
                                required>
                            <input type="text" name="nama"
                                class="w-full bg-gray-700 text-white border-gray-600 rounded-lg" placeholder="Nama"
                                required>
                            <input type="text" name="jurusan"
                                class="w-full bg-gray-700 text-white border-gray-600 rounded-lg" placeholder="Jurusan"
                                required>
                        </div>
                        <button type="submit"
                            class="w-full mt-6 bg-blue-600 hover:bg-blue-500 text-white font-bold py-2 rounded-lg transition">
                            Simpan Data
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
