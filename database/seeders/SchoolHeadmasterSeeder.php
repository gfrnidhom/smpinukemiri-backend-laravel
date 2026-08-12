<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolHeadmasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('school_headmasters')->insert([
            [
                'name' => 'Drs. Ahmad Fauzi, M.Pd.',
                'nip' => '196512121990031001',
                'position' => 'Kepala Sekolah',
                'gender' => 'male',
                'birthplace' => 'Yogyakarta',
                'birthdate' => '1965-12-12',
                'employment_status' => 'Permanent',
                'religion' => 'islam',
                'qualification' => 'S2 Pendidikan',
                'specialization' => 'Manajemen Pendidikan',
                'address' => 'Jl. Malioboro No. 10, Yogyakarta',
                'remarks' => 'Kepala Sekolah dengan pengalaman lebih dari 20 tahun.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
