<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teachers')->insert([
            [
                'first_name' => 'Budi',
                'last_name' => 'Santoso',
                'title' => 'S.Pd.',
                'nip' => '198703152021011001',
                'email' => 'budi.santoso@example.com',
                'phone' => '081234567890',
                'address' => 'Jl. Merdeka No. 45, Jakarta',
                'birthplace' => 'Jakarta',
                'date_of_birth' => '1987-03-15',
                'gender' => 'male',
                'religion' => 'islam',
                'qualification' => 'S3 Teknik Informatika',
                'specialization' => 'Machine Learning',
                'hire_date' => '2021-01-01',
                'employment_status' => 'Permanent',
                'status' => 'active',
                'image' => 'budi_santoso.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Siti',
                'last_name' => 'Rahayu',
                'title' => 'M.Sc.',
                'nip' => '199002102018032002',
                'email' => 'siti.rahayu@example.com',
                'phone' => '082345678901',
                'address' => 'Jl. Diponegoro No. 20, Bandung',
                'birthplace' => 'Bandung',
                'date_of_birth' => '1990-02-10',
                'gender' => 'female',
                'religion' => 'christian',
                'qualification' => 'S2 Biologi',
                'specialization' => 'Genetika',
                'hire_date' => '2018-03-20',
                'employment_status' => 'Permanent',
                'status' => 'active',
                'image' => 'siti_rahayu.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
