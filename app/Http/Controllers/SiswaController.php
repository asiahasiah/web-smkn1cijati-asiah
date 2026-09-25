<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Tampilkan semua data siswa
     */
    public function index()
    {
        $siswas = Siswa::latest()->get(); // ambil data terbaru di atas
        return view('siswa.index', compact('siswas'));
    }

    /**
     * Tampilkan form tambah data
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Simpan data baru ke database
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'   => 'required|string|max:100',
            'nis'    => 'required|unique:siswas,nis',
            'kelas'  => 'required|string|max:20',
            'alamat' => 'nullable|string'
        ], [
            'nama.required' => 'Nama wajib diisi',
            'nis.required'  => 'NIS wajib diisi',
            'nis.unique'    => 'NIS sudah terdaftar'
        ]);

        Siswa::create($validated);

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil ditambahkan!');
    }

    /**
     * Tampilkan form edit
     */
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update data siswa
     */
    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);

        $validated = $request->validate([
            'nama'   => 'required|string|max:100',
            'nis'    => 'required|unique:siswas,nis,'.$id,
            'kelas'  => 'required|string|max:20',
            'alamat' => 'nullable|string'
        ]);

        $siswa->update($validated);

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diupdate!');
    }

    /**
     * Hapus data siswa
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus!');
    }
}