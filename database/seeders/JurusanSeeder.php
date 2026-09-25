<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jurusan;

class JurusanSeeder extends Seeder
{
    public function run(): void
    {
        // Menghapus data lama agar tidak terjadi duplikat
        Jurusan::truncate();

        $jurusans = [

            [
                'kode' => 'RPL',
                'nama' => 'Rekayasa Perangkat Lunak',
                'deskripsi' => 'Mempelajari pembuatan aplikasi, website, dan game menggunakan teknologi pemrograman serta pengelolaan database.',
                'peluang_kerja' => 'Web Developer, Mobile App Developer, Software Engineer, Freelancer',
                'foto' => 'rpl.jpg.jpeg',
            ],

            [
                'kode' => 'BDP',
                'nama' => 'Bisnis Daring dan Pemasaran',
                'deskripsi' => 'Mempelajari penjualan online, manajemen toko, digital marketing, e-commerce, dan kewirausahaan.',
                'peluang_kerja' => 'Digital Marketer, E-Commerce Specialist, Wirausaha, Admin Marketplace',
                'foto' => 'pemasaran.jpg.jpeg',
            ],

            [
                'kode' => 'APHP',
                'nama' => 'Agribisnis Pengolahan Hasil Pertanian',
                'deskripsi' => 'Mempelajari cara mengolah hasil pertanian menjadi makanan dan minuman yang memiliki nilai jual.',
                'peluang_kerja' => 'Wirausaha Makanan, Quality Control, Teknisi Pangan, Penyuluh Pertanian',
                'foto' => 'aphp.jpg.jpeg',
            ],

            [
                'kode' => 'TKRO',
                'nama' => 'Teknik Kendaraan Ringan Otomotif',
                'deskripsi' => 'Mempelajari perawatan, perbaikan, pemeriksaan, dan tune-up kendaraan ringan atau roda empat.',
                'peluang_kerja' => 'Mekanik Bengkel, Service Advisor, Wirausaha Bengkel, Teknisi Otomotif',
                'foto' => 'tkr.jpg.jpeg',
            ],

        ];

        foreach ($jurusans as $jurusan) {
            Jurusan::create($jurusan);
        }
    }
}