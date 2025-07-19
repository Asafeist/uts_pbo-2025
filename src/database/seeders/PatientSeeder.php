<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Patient::insert([
            [
                'name' => 'John Doe',
                'gender' => 'Male',
                'date_of_birth' => '1990-05-20',
                'phone' => '082112345678',
                'email' => 'john.doe@example.com',
            ],
            [
                'name' => 'Jane Smith',
                'gender' => 'Female',
                'date_of_birth' => '1985-11-02',
                'phone' => '082198765432',
                'email' => 'jane.smith@example.com',
            ],
        ]);
    }
}
