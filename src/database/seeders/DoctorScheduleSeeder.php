<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\DoctorSchedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doctors = Doctor::all();

        foreach ($doctors as $doctor) {
            DoctorSchedule::insert([
                [
                    'doctor_id' => $doctor->id,
                    'day_of_week' => 'Monday',
                    'start_time' => '09:00:00',
                    'end_time' => '12:00:00',
                ],
                [
                    'doctor_id' => $doctor->id,
                    'day_of_week' => 'Wednesday',
                    'start_time' => '13:00:00',
                    'end_time' => '16:00:00',
                ],
            ]);
        }
    }
}
