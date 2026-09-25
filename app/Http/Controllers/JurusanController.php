<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusans = Jurusan::latest()->get();

        return view('jurusan', compact('jurusans'));
    }

    public function adminIndex()
    {
        $jurusans = Jurusan::latest()->get();

        return view('admin.jurusan.index', compact('jurusans'));
    }

    public function create()
    {
        return view('admin.jurusan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode'          => 'required|string|max:20',
            'nama'          => 'required|string|max:255',
            'deskripsi'     => 'required|string',
            'peluang_kerja' => 'required|string',
            'foto'          => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/jurusan'), $namaFile);
            $validated['foto'] = $namaFile;
        }

        Jurusan::create($validated);

        return redirect()
            ->route('admin.jurusan.index')
            ->with('success', 'Jurusan berhasil ditambahkan.');
    }

    public function edit(Jurusan $jurusan)
    {
        return view('admin.jurusan.edit', compact('jurusan'));
    }

    public function update(Request $request, Jurusan $jurusan)
    {
        $validated = $request->validate([
            'kode'          => 'required|string|max:20',
            'nama'          => 'required|string|max:255',
            'deskripsi'     => 'required|string',
            'peluang_kerja' => 'required|string',
            'foto'          => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/jurusan'), $namaFile);
            $validated['foto'] = $namaFile;
        }

        $jurusan->update($validated);

        return redirect()
            ->route('admin.jurusan.index')
            ->with('success', 'Jurusan berhasil diperbarui.');
    }

    public function destroy(Jurusan $jurusan)
    {
        $jurusan->delete();

        return redirect()
            ->route('admin.jurusan.index')
            ->with('success', 'Jurusan berhasil dihapus.');
    }
}