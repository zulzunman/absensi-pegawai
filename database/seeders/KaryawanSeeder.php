<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Generate 10 fake data for 'karyawan' table
        for ($i = 1; $i <= 10; $i++) {
            DB::table('karyawan')->insert([
                'nama' => 'Karyawan ' . $i,
                'no_absensi' => $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
