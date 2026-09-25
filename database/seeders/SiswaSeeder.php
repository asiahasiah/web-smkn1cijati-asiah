<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa; 

class SiswaSeeder extends Seeder
{
    public function run(): void
    {
        Siswa::create(['nis' => '1001', 'nama' => 'Andi', 'jurusan' => 'RPL']);
        Siswa::create(['nis' => '1002', 'nama' => 'Sinta', 'jurusan' => 'TKJ']);
        Siswa::create(['nis' => '1003', 'nama' => 'Riko', 'jurusan' => 'MM']);
    }
}