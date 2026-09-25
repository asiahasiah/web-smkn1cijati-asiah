<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GuruController extends Controller
{
    /**
     * Halaman publik: daftar guru (/guru)
     */
    public function index()
    {
        $gurus = Guru::orderBy('nama', 'asc')->get();

        return view('guru', compact('gurus'));
    }

    /**
     * Halaman admin: kelola guru (/admin/guru)
     */
    public function adminIndex()
    {
        $gurus = Guru::orderBy('nama', 'asc')->get();

        return view('admin.guru.index', compact('gurus'));
    }

    /**
     * Form tambah guru (/guru/create)
     */
    public function create()
    {
        return view('admin.guru.create');
    }

    /**
     * Simpan guru baru (POST /guru)
     */
    public function store(Request $request)
    {
        $request->validate([
            'nip'   => 'nullable|string|max:50',
            'nama'  => 'required|string|max:150',
            'mapel' => 'nullable|string|max:150',
            'foto'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = $request->only(['nip', 'nama', 'mapel']);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $namaFoto = time() . '_' . $file->getClientOriginalName();

            $folder = public_path('images/guru');
            if (!File::exists($folder)) {
                File::makeDirectory($folder, 0755, true);
            }

            $file->move($folder, $namaFoto);
            $data['foto'] = $namaFoto;
        }

        Guru::create($data);

        return redirect()->route('admin.guru.index')
            ->with('success', 'Data guru berhasil ditambahkan.');
    }

    /**
     * Form edit guru (/guru/{guru}/edit)
     */
    public function edit(Guru $guru)
    {
        return view('admin.guru.edit', compact('guru'));
    }

    /**
     * Update guru (PUT /guru/{guru})
     */
    public function update(Request $request, Guru $guru)
    {
        $request->validate([
            'nip'   => 'nullable|string|max:50',
            'nama'  => 'required|string|max:150',
            'mapel' => 'nullable|string|max:150',
            'foto'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = $request->only(['nip', 'nama', 'mapel']);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $namaFoto = time() . '_' . $file->getClientOriginalName();

            $folder = public_path('images/guru');
            if (!File::exists($folder)) {
                File::makeDirectory($folder, 0755, true);
            }

            $file->move($folder, $namaFoto);
            $data['foto'] = $namaFoto;

            // Hapus foto lama jika ada
            if ($guru->foto && File::exists($folder . '/' . $guru->foto)) {
                File::delete($folder . '/' . $guru->foto);
            }
        }

        $guru->update($data);

        return redirect()->route('admin.guru.index')
            ->with('success', 'Data guru berhasil diperbarui.');
    }

    /**
     * Hapus guru (DELETE /guru/{guru})
     */
    public function destroy(Guru $guru)
    {
        if ($guru->foto) {
            $path = public_path('images/guru/' . $guru->foto);
            if (File::exists($path)) {
                File::delete($path);
            }
        }

        $guru->delete();

        return redirect()->route('admin.guru.index')
            ->with('success', 'Data guru berhasil dihapus.');
    }
}