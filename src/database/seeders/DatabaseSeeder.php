<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            DepartmentSeeder::class,
            RoomSeeder::class,
            DoctorSeeder::class,
            PatientSeeder::class,
            DoctorScheduleSeeder::class,
            AppointmentSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
        ]);
    }
}
