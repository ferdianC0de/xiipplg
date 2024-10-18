<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelas::truncate();
        $kelas = [
            'XI PPLG 1',
            'XI PPLG 2',
            'XI PPLG 3',
            'XI PPLG 4'
        ];

        foreach ($kelas as $k) {
            # code...
            Kelas::insert([
                'nama_kelas' => $k
            ]);
        }


    }
}
