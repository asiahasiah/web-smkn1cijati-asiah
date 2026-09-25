<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\GuruSeeder;
use Database\Seeders\JurusanSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            GuruSeeder::class,
            JurusanSeeder::class,
            FasilitasSeeder::class,
        ]);
    }
}