<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Jurusan;
use App\Models\Fasilitas;
use App\Models\Berita;
use App\Models\Ekstrakurikuler;
use App\Models\Galeri;

class AdminController extends Controller
{
    public function index()
    {
        $jumlahGuru = Guru::count();
        $jumlahJurusan = Jurusan::count();
        $jumlahFasilitas = Fasilitas::count();
        $jumlahBerita = Berita::count();
        $jumlahEkstrakurikuler = Ekstrakurikuler::count();
        $jumlahGaleri = Galeri::count();

        return view('admin.dashboard', compact(
            'jumlahGuru',
            'jumlahJurusan',
            'jumlahFasilitas',
            'jumlahBerita',
            'jumlahEkstrakurikuler',
            'jumlahGaleri'
        ));
    }
}