<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            [
                'nama' => 'Soni',
                'nim' => 136,
                'jenis_kelamin' => 'Laki-laki',
                'prodi' => 'Teknik Informatika',
                'fakultas' => 'Teknik',
            ],
            [
                'nama' => 'Indra',
                'nim' => 006,
                'jenis_kelamin' => 'Laki-laki',
                'prodi' => 'Sistem Informasi',
                'fakultas' => 'Teknik',
            ],
            [
                'nama' => 'Soni Indra Maulana',
                'nim' => 246, 
                'jenis_kelamin' => 'Laki-laki',
                'prodi' => 'Teknik Informatika',
                'fakultas' => 'Teknik',
            ],
        ]);
    }
}
