<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 p-8 shadow-lg rounded-xl border border-gray-700">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-bold text-white">Form Edit Mahasiswa</h2>
                    <a href="{{ route('mahasiswa.index') }}" class="text-gray-400 hover:text-white text-sm transition">
                        &larr; Kembali ke Daftar
                    </a>
                </div>

                <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="space-y-5">
                        <div>
                            <label class="block text-sm font-medium text-gray-400 mb-1">NIM Mahasiswa</label>
                            <input type="text" name="nim" value="{{ $mahasiswa->nim }}"
                                class="w-full bg-gray-700 text-white border-gray-600 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition"
                                placeholder="Masukkan NIM" required>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-400 mb-1">Nama Lengkap</label>
                            <input type="text" name="nama" value="{{ $mahasiswa->nama }}"
                                class="w-full bg-gray-700 text-white border-gray-600 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition"
                                placeholder="Masukkan Nama" required>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-400 mb-1">Jurusan</label>
                            <input type="text" name="jurusan" value="{{ $mahasiswa->jurusan }}"
                                class="w-full bg-gray-700 text-white border-gray-600 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition"
                                placeholder="Masukkan Jurusan" required>
                        </div>
                    </div>

                    <div class="mt-8 flex gap-3">
                        <button type="submit"
                            class="flex-1 bg-blue-600 hover:bg-blue-500 text-white font-bold py-2 rounded-lg shadow-md transition transform active:scale-95">
                            Update Data
                        </button>
                        <a href="{{ route('mahasiswa.index') }}"
                            class="flex-1 bg-gray-700 hover:bg-gray-600 text-white font-bold py-2 rounded-lg text-center transition">
                            Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
