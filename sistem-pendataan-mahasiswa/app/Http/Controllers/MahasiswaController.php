<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all(); // Mengambil semua data
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswas|max:10',
            'nama' => 'required',
            'jurusan' => 'required',
        ]);

        \App\Models\Mahasiswa::create($request->all());
        return redirect('/mahasiswa')->with('success', 'Data berhasil ditambahkan!');
    }


    public function edit($id)
    {
        $mahasiswa = \App\Models\Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
        ]);

        $mahasiswa = \App\Models\Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->all());
        return redirect('/mahasiswa')->with('success', 'Data berhasil diupdate!');
    }

    public function destroy($id)
    {
        $mahasiswa = \App\Models\Mahasiswa::findOrFail($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa')->with('success', 'Data berhasil dihapus!');
    }
}
