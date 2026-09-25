<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\LoginController;


/*
|--------------------------------------------------------------------------
| BERANDA
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| GURU - HALAMAN PUBLIK
|--------------------------------------------------------------------------
*/

Route::get('/guru', [GuruController::class, 'index'])
    ->name('guru.index');


/*
|--------------------------------------------------------------------------
| JURUSAN - HALAMAN PUBLIK
|--------------------------------------------------------------------------
*/

Route::get('/jurusan', [JurusanController::class, 'index'])
    ->name('jurusan.index');


/*
|--------------------------------------------------------------------------
| PROFIL - HALAMAN PUBLIK
|--------------------------------------------------------------------------
*/

Route::get('/profil', [ProfilController::class, 'index'])
    ->name('profil');


/*
|--------------------------------------------------------------------------
| KONTAK - HALAMAN PUBLIK
|--------------------------------------------------------------------------
*/

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');


/*
|--------------------------------------------------------------------------
| FASILITAS - HALAMAN PUBLIK
|--------------------------------------------------------------------------
*/

Route::get('/fasilitas', [FasilitasController::class, 'index'])
    ->name('fasilitas.index');


/*
|--------------------------------------------------------------------------
| BERITA - HALAMAN PUBLIK
|--------------------------------------------------------------------------
*/

Route::get('/berita', [BeritaController::class, 'index'])
    ->name('berita.index');

Route::get('/berita/{id}', [BeritaController::class, 'show'])
    ->name('berita.show');


/*
|--------------------------------------------------------------------------
| EKSTRAKURIKULER - HALAMAN PUBLIK
|--------------------------------------------------------------------------
*/

Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'index'])
    ->name('ekstrakurikuler.index');

Route::get('/ekstrakurikuler/{ekstrakurikuler}', [EkstrakurikulerController::class, 'show'])
    ->name('ekstrakurikuler.show');


/*
|--------------------------------------------------------------------------
| GALERI - HALAMAN PUBLIK
|--------------------------------------------------------------------------
*/

Route::get('/galeri', [GaleriController::class, 'index'])
    ->name('galeri.index');

Route::get('/galeri/{galeri}', [GaleriController::class, 'show'])
    ->name('galeri.show');


/*
|--------------------------------------------------------------------------
| LOGIN ADMIN
|--------------------------------------------------------------------------
*/

Route::get('/login', [LoginController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [LoginController::class, 'login'])
    ->name('login.process');


/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
|
| Semua halaman dan aksi di dalam grup ini hanya bisa dilakukan
| setelah admin berhasil login.
|
*/

Route::middleware('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD ADMIN
    |--------------------------------------------------------------------------
    */

    Route::get('/admin', [AdminController::class, 'index'])
        ->name('admin.dashboard');
        

        /*
        |--------------------------------------------------------------------------
        | GURU - ADMIN
        |--------------------------------------------------------------------------
        */
        
        // TAMBAHKAN BARIS INI (belum ada sebelumnya):
        Route::get('/admin/guru', [GuruController::class, 'adminIndex'])
            ->name('admin.guru.index');
        
        // Baris di bawah ini SUDAH ADA di file Anda, biarkan seperti semula:
        Route::get('/guru/create', [GuruController::class, 'create'])
            ->name('guru.create');
        
        Route::post('/guru', [GuruController::class, 'store'])
            ->name('guru.store');
        
        Route::get('/guru/{guru}/edit', [GuruController::class, 'edit'])
            ->name('guru.edit');
        
        Route::put('/guru/{guru}', [GuruController::class, 'update'])
            ->name('guru.update');
        
        Route::delete('/guru/{guru}', [GuruController::class, 'destroy'])
            ->name('guru.destroy');


    /*
    |--------------------------------------------------------------------------
    | EKSTRAKURIKULER - ADMIN
    |--------------------------------------------------------------------------
    */

    Route::get('/admin/ekstrakurikuler', [EkstrakurikulerController::class, 'adminIndex'])
        ->name('admin.ekstrakurikuler.index');

    Route::get('/admin/ekstrakurikuler/create', [EkstrakurikulerController::class, 'create'])
        ->name('admin.ekstrakurikuler.create');

    Route::post('/admin/ekstrakurikuler', [EkstrakurikulerController::class, 'store'])
        ->name('admin.ekstrakurikuler.store');

    Route::get('/admin/ekstrakurikuler/{id}/edit', [EkstrakurikulerController::class, 'edit'])
        ->name('admin.ekstrakurikuler.edit');

    Route::put('/admin/ekstrakurikuler/{id}', [EkstrakurikulerController::class, 'update'])
        ->name('admin.ekstrakurikuler.update');

    Route::delete('/admin/ekstrakurikuler/{id}', [EkstrakurikulerController::class, 'destroy'])
        ->name('admin.ekstrakurikuler.destroy');


    /*
    |--------------------------------------------------------------------------
    | BERITA - ADMIN
    |--------------------------------------------------------------------------
    */

    Route::get('/admin/berita', [BeritaController::class, 'adminIndex'])
        ->name('admin.berita.index');

    Route::get('/admin/berita/create', [BeritaController::class, 'create'])
        ->name('admin.berita.create');

    Route::post('/admin/berita', [BeritaController::class, 'store'])
        ->name('admin.berita.store');

    Route::get('/admin/berita/{id}/edit', [BeritaController::class, 'edit'])
        ->name('admin.berita.edit');

    Route::put('/admin/berita/{id}', [BeritaController::class, 'update'])
        ->name('admin.berita.update');

    Route::delete('/admin/berita/{id}', [BeritaController::class, 'destroy'])
        ->name('admin.berita.destroy');


    /*
|--------------------------------------------------------------------------
| GALERI - ADMIN
|--------------------------------------------------------------------------
*/

Route::get('/admin/galeri', [GaleriController::class, 'adminIndex'])
->name('admin.galeri.index');

Route::get('/admin/galeri/create', [GaleriController::class, 'create'])
->name('admin.galeri.create');

Route::post('/admin/galeri', [GaleriController::class, 'store'])
->name('admin.galeri.store');

Route::get('/admin/galeri/{galeri}/edit', [GaleriController::class, 'edit'])
->name('admin.galeri.edit');

Route::put('/admin/galeri/{galeri}', [GaleriController::class, 'update'])
->name('admin.galeri.update');

Route::delete('/admin/galeri/{galeri}', [GaleriController::class, 'destroy'])
->name('admin.galeri.destroy');

Route::delete('/admin/galeri-foto/{id}', [GaleriController::class, 'destroyFoto'])
->name('admin.galeri.foto.destroy');
    /*
    |--------------------------------------------------------------------------
    | LOGOUT
    |--------------------------------------------------------------------------
    */

    Route::post('/logout', [LoginController::class, 'logout'])
        ->name('logout');
});

/*
|--------------------------------------------------------------------------
| JURUSAN - ADMIN
|--------------------------------------------------------------------------
*/

Route::get('/admin/jurusan', [JurusanController::class, 'adminIndex'])
    ->name('admin.jurusan.index');

Route::get('/admin/jurusan/create', [JurusanController::class, 'create'])
    ->name('admin.jurusan.create');

Route::post('/admin/jurusan', [JurusanController::class, 'store'])
    ->name('admin.jurusan.store');

Route::get('/admin/jurusan/{jurusan}/edit', [JurusanController::class, 'edit'])
    ->name('admin.jurusan.edit');

Route::put('/admin/jurusan/{jurusan}', [JurusanController::class, 'update'])
    ->name('admin.jurusan.update');

Route::delete('/admin/jurusan/{jurusan}', [JurusanController::class, 'destroy'])
    ->name('admin.jurusan.destroy');

     /*
    |--------------------------------------------------------------------------
    | FASILITAS - ADMIN
    |--------------------------------------------------------------------------
    */

    Route::get('/admin/fasilitas', [FasilitasController::class, 'adminIndex'])
        ->name('admin.fasilitas.index');

    Route::get('/admin/fasilitas/create', [FasilitasController::class, 'create'])
        ->name('admin.fasilitas.create');

    Route::post('/admin/fasilitas', [FasilitasController::class, 'store'])
        ->name('admin.fasilitas.store');

    Route::get('/admin/fasilitas/{fasilitas}/edit', [FasilitasController::class, 'edit'])
        ->name('admin.fasilitas.edit');

    Route::put('/admin/fasilitas/{fasilitas}', [FasilitasController::class, 'update'])
        ->name('admin.fasilitas.update');

    Route::delete('/admin/fasilitas/{fasilitas}', [FasilitasController::class, 'destroy'])
        ->name('admin.fasilitas.destroy');

            /*
    |--------------------------------------------------------------------------
    | PROFIL - ADMIN
    |--------------------------------------------------------------------------
    */

    Route::get('/admin/profil', [ProfilController::class, 'adminIndex'])
    ->name('admin.profil.index');

Route::get('/admin/profil/edit', [ProfilController::class, 'edit'])
    ->name('admin.profil.edit');

Route::put('/admin/profil', [ProfilController::class, 'update'])
    ->name('admin.profil.update');