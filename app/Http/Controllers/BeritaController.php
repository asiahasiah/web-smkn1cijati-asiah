<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BeritaController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | HALAMAN PUBLIK
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $beritas = Berita::latest('created_at')->get();

        return view('berita.index', compact('beritas'));
    }

    public function show($id)
    {
        $berita = Berita::findOrFail($id);

        return view('berita.show', compact('berita'));
    }


    /*
    |--------------------------------------------------------------------------
    | HALAMAN ADMIN
    |--------------------------------------------------------------------------
    */

    public function adminIndex()
    {
        $beritas = Berita::latest('created_at')->get();

        return view('admin.berita.index', compact('beritas'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $namaFoto = null;

        if ($request->hasFile('foto')) {

            $folder = public_path('images/berita');

            if (!is_dir($folder)) {
                mkdir($folder, 0755, true);
            }

            $namaFoto = time() . '_' .
                        uniqid() . '.' .
                        $request->file('foto')->extension();

            $request->file('foto')->move(
                $folder,
                $namaFoto
            );
        }

        Berita::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'foto' => $namaFoto,
        ]);

        return redirect()
            ->route('admin.berita.index')
            ->with('success', 'Berita berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);

        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $namaFoto = $berita->foto;

        if ($request->hasFile('foto')) {

            $folder = public_path('images/berita');

            if (!is_dir($folder)) {
                mkdir($folder, 0755, true);
            }

            // Hapus foto lama jika ada
            if (!empty($berita->foto) && file_exists($folder . '/' . $berita->foto)) {
                unlink($folder . '/' . $berita->foto);
            }

            $namaFoto = time() . '_' .
                        uniqid() . '.' .
                        $request->file('foto')->extension();

            $request->file('foto')->move(
                $folder,
                $namaFoto
            );
        }

        $berita->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'foto' => $namaFoto,
        ]);

        return redirect()
            ->route('admin.berita.index')
            ->with('success', 'Berita berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        $folder = public_path('images/berita');

        if (!empty($berita->foto) && file_exists($folder . '/' . $berita->foto)) {
            unlink($folder . '/' . $berita->foto);
        }

        $berita->delete();

        return redirect()
            ->route('admin.berita.index')
            ->with('success', 'Berita berhasil dihapus!');
    }
}