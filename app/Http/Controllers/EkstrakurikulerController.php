<?php
 
namespace App\Http\Controllers;
 
use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
 
class EkstrakurikulerController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | HALAMAN PUBLIK
    |--------------------------------------------------------------------------
    */
 
    public function index()
    {
        $ekstrakurikuler = Ekstrakurikuler::latest()->get();
 
        return view('ekstrakurikuler', compact('ekstrakurikuler'));
    }
 
 
    public function show($id)
    {
        $ekskul = Ekstrakurikuler::findOrFail($id);
 
        return view('ekstrakurikuler-detail', compact('ekskul'));
    }
 
 
    /*
    |--------------------------------------------------------------------------
    | ADMIN
    |--------------------------------------------------------------------------
    */
 
    public function adminIndex()
    {
        $ekstrakurikuler = Ekstrakurikuler::latest()->get();
 
        return view(
            'admin.ekstrakurikuler.index',
            compact('ekstrakurikuler')
        );
    }
 
 
    public function create()
    {
        return view('admin.ekstrakurikuler.create');
    }
 
 
    /*
    |--------------------------------------------------------------------------
    | SIMPAN DATA
    |--------------------------------------------------------------------------
    */
 
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'jadwal' => 'nullable|string|max:255',
            'pembina' => 'nullable|string|max:255',
 
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ], [
            'nama.required' => 'Nama ekstrakurikuler wajib diisi.',
 
            'foto.image' => 'Foto harus berupa gambar.',
            'foto.mimes' => 'Foto harus berformat JPG, JPEG, PNG, atau WEBP.',
            'foto.max' => 'Ukuran foto maksimal 2 MB.',
 
            'logo.image' => 'Logo harus berupa gambar.',
            'logo.mimes' => 'Logo harus berformat JPG, JPEG, PNG, atau WEBP.',
            'logo.max' => 'Ukuran logo maksimal 2 MB.',
        ]);
 
 
        $data = [
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'jadwal' => $request->jadwal,
            'pembina' => $request->pembina,
        ];
 
 
        /*
        |--------------------------------------------------------------------------
        | UPLOAD FOTO
        |--------------------------------------------------------------------------
        */
 
        if ($request->hasFile('foto')) {
 
            $file = $request->file('foto');
 
            $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
 
            $file->move(
                public_path('images'),
                $filename
            );
 
            $data['foto'] = $filename;
        }
 
 
        /*
        |--------------------------------------------------------------------------
        | UPLOAD LOGO
        |--------------------------------------------------------------------------
        */
 
        if ($request->hasFile('logo')) {
 
            $file = $request->file('logo');
 
            $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
 
            $file->move(
                public_path('images'),
                $filename
            );
 
            $data['logo'] = $filename;
        }
 
 
        Ekstrakurikuler::create($data);
 
 
        return redirect()
            ->route('admin.ekstrakurikuler.index')
            ->with(
                'success',
                'Ekstrakurikuler berhasil ditambahkan.'
            );
    }
 
 
    /*
    |--------------------------------------------------------------------------
    | EDIT
    |--------------------------------------------------------------------------
    */
 
    public function edit($id)
    {
        $ekskul = Ekstrakurikuler::findOrFail($id);
 
        return view(
            'admin.ekstrakurikuler.edit',
            compact('ekskul')
        );
    }
 
 
    /*
    |--------------------------------------------------------------------------
    | UPDATE DATA
    |--------------------------------------------------------------------------
    */
 
    public function update(Request $request, $id)
    {
        $ekskul = Ekstrakurikuler::findOrFail($id);
 
 
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'jadwal' => 'nullable|string|max:255',
            'pembina' => 'nullable|string|max:255',
 
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ], [
            'nama.required' => 'Nama ekstrakurikuler wajib diisi.',
 
            'foto.image' => 'Foto harus berupa gambar.',
            'foto.mimes' => 'Foto harus berformat JPG, JPEG, PNG, atau WEBP.',
            'foto.max' => 'Ukuran foto maksimal 2 MB.',
 
            'logo.image' => 'Logo harus berupa gambar.',
            'logo.mimes' => 'Logo harus berformat JPG, JPEG, PNG, atau WEBP.',
            'logo.max' => 'Ukuran logo maksimal 2 MB.',
        ]);
 
 
        $data = [
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'jadwal' => $request->jadwal,
            'pembina' => $request->pembina,
        ];
 
 
        /*
        |--------------------------------------------------------------------------
        | UPDATE FOTO
        |--------------------------------------------------------------------------
        */
 
        if ($request->hasFile('foto')) {
 
            if (
                $ekskul->foto &&
                file_exists(
                    public_path('images/' . $ekskul->foto)
                )
            ) {
                unlink(
                    public_path('images/' . $ekskul->foto)
                );
            }
 
 
            $file = $request->file('foto');
 
            $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
 
            $file->move(
                public_path('images'),
                $filename
            );
 
            $data['foto'] = $filename;
        }
 
 
        /*
        |--------------------------------------------------------------------------
        | UPDATE LOGO
        |--------------------------------------------------------------------------
        */
 
        if ($request->hasFile('logo')) {
 
            if (
                $ekskul->logo &&
                file_exists(
                    public_path('images/' . $ekskul->logo)
                )
            ) {
                unlink(
                    public_path('images/' . $ekskul->logo)
                );
            }
 
 
            $file = $request->file('logo');
 
            $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
 
            $file->move(
                public_path('images'),
                $filename
            );
 
            $data['logo'] = $filename;
        }
 
 
        $ekskul->update($data);
 
 
        return redirect()
            ->route('admin.ekstrakurikuler.index')
            ->with(
                'success',
                'Ekstrakurikuler berhasil diperbarui.'
            );
    }
 
 
    /*
    |--------------------------------------------------------------------------
    | HAPUS DATA
    |--------------------------------------------------------------------------
    */
 
    public function destroy($id)
    {
        $ekskul = Ekstrakurikuler::findOrFail($id);
 
 
        /*
        |--------------------------------------------------------------------------
        | HAPUS FOTO
        |--------------------------------------------------------------------------
        */
 
        if (
            $ekskul->foto &&
            file_exists(
                public_path('images/' . $ekskul->foto)
            )
        ) {
            unlink(
                public_path('images/' . $ekskul->foto)
            );
        }
 
 
        /*
        |--------------------------------------------------------------------------
        | HAPUS LOGO
        |--------------------------------------------------------------------------
        */
 
        if (
            $ekskul->logo &&
            file_exists(
                public_path('images/' . $ekskul->logo)
            )
        ) {
            unlink(
                public_path('images/' . $ekskul->logo)
            );
        }
 
 
        /*
        |--------------------------------------------------------------------------
        | HAPUS DATA DATABASE
        |--------------------------------------------------------------------------
        */
 
        $ekskul->delete();
 
 
        return redirect()
            ->route('admin.ekstrakurikuler.index')
            ->with(
                'success',
                'Ekstrakurikuler berhasil dihapus.'
            );
    }
}
 