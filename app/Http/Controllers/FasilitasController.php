<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{
    // Halaman publik
    public function index()
    {
        $fasilitas = Fasilitas::latest()->get();

        return view('fasilitas.index', compact('fasilitas'));
    }

    // Halaman admin (Kelola Fasilitas)
    public function adminIndex()
    {
        $fasilitas = Fasilitas::latest()->get();

        return view('admin.fasilitas.index', compact('fasilitas'));
    }

    public function create()
    {
        return view('admin.fasilitas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = [
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ];

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')
                ->store('fasilitas', 'public');
        }

        Fasilitas::create($data);

        return redirect()
            ->route('admin.fasilitas.index')
            ->with('success', 'Fasilitas berhasil ditambahkan.');
    }

    public function edit(Fasilitas $fasilitas)
    {
        return view('admin.fasilitas.edit', compact('fasilitas'));
    }

    public function update(Request $request, Fasilitas $fasilitas)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = [
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ];

        if ($request->hasFile('gambar')) {
            if ($fasilitas->gambar) {
                Storage::disk('public')->delete($fasilitas->gambar);
            }

            $data['gambar'] = $request->file('gambar')
                ->store('fasilitas', 'public');
        }

        $fasilitas->update($data);

        return redirect()
            ->route('admin.fasilitas.index')
            ->with('success', 'Fasilitas berhasil diperbarui.');
    }

    public function destroy(Fasilitas $fasilitas)
    {
        if ($fasilitas->gambar) {
            Storage::disk('public')->delete($fasilitas->gambar);
        }

        $fasilitas->delete();

        return redirect()
            ->route('admin.fasilitas.index')
            ->with('success', 'Fasilitas berhasil dihapus.');
    }
}