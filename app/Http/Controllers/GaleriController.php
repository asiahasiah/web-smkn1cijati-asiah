<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\GaleriFoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | HALAMAN PUBLIK
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $galeris = Galeri::with('fotos')
            ->latest('tanggal')
            ->latest('id')
            ->get();

        return view('Galeri', compact('galeris'));
    }


    /*
    |--------------------------------------------------------------------------
    | HALAMAN ADMIN
    |--------------------------------------------------------------------------
    */

    public function adminIndex()
    {
        $galeris = Galeri::with('fotos')
            ->latest('tanggal')
            ->latest('id')
            ->get();

        return view('admin.galeri.index', compact('galeris'));
    }

    public function create()
    {
        return view('galeri-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tanggal' => 'nullable|date',
            'foto' => 'required|array|min:1',
            'foto.*' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
        ], [
            'judul.required' => 'Judul kegiatan wajib diisi.',
            'tanggal.date' => 'Tanggal tidak valid.',
            'foto.required' => 'Minimal pilih satu foto.',
            'foto.min' => 'Minimal pilih satu foto.',
            'foto.*.image' => 'File harus berupa gambar.',
            'foto.*.mimes' => 'Format foto harus JPG, JPEG, PNG, atau WEBP.',
            'foto.*.max' => 'Ukuran setiap foto maksimal 5 MB.',
        ]);

        $galeri = Galeri::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
        ]);

        foreach ($request->file('foto') as $foto) {
            $path = $foto->store('galeri', 'public');

            GaleriFoto::create([
                'galeri_id' => $galeri->id,
                'foto' => $path,
            ]);
        }

        return redirect()
            ->route('galeri.index')
            ->with('success', 'Galeri berhasil ditambahkan.');
    }

    public function show(Galeri $galeri)
    {
        $galeri->load('fotos');

        return view('galeri-show', compact('galeri'));
    }

    public function edit(Galeri $galeri)
    {
        $galeri->load('fotos');

        return view('galeri-edit', compact('galeri'));
    }

    public function update(Request $request, Galeri $galeri)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tanggal' => 'nullable|date',
            'foto' => 'nullable|array',
            'foto.*' => 'image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        $galeri->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
        ]);

        if ($request->hasFile('foto')) {
            foreach ($request->file('foto') as $foto) {
                $path = $foto->store('galeri', 'public');

                GaleriFoto::create([
                    'galeri_id' => $galeri->id,
                    'foto' => $path,
                ]);
            }
        }

        return redirect()
            ->route('galeri.index')
            ->with('success', 'Galeri berhasil diperbarui.');
    }

    public function destroy(Galeri $galeri)
    {
        $galeri->load('fotos');

        foreach ($galeri->fotos as $foto) {
            if (
                $foto->foto &&
                Storage::disk('public')->exists($foto->foto)
            ) {
                Storage::disk('public')->delete($foto->foto);
            }
        }

        $galeri->delete();

        return redirect()
            ->route('galeri.index')
            ->with('success', 'Galeri berhasil dihapus.');
    }

    public function destroyFoto($id)
    {
        $foto = GaleriFoto::findOrFail($id);

        if (
            $foto->foto &&
            Storage::disk('public')->exists($foto->foto)
        ) {
            Storage::disk('public')->delete($foto->foto);
        }

        $foto->delete();

        return back()
            ->with('success', 'Foto berhasil dihapus.');
    }
}