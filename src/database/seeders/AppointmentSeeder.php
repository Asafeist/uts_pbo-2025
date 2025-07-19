<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
 $patients = Patient::all();
        $doctors = Doctor::all();

        Appointment::insert([
            [
                'patient_id' => $patients[0]->id,
                'doctor_id' => $doctors[0]->id,
                'room_id' => $doctors[0]->room_id,
                'appointment_date' => now()->addDays(3)->format('Y-m-d'),
                'appointment_time' => '09:00:00',
                'status' => 'confirmed',
                'notes' => 'Initial checkup',
            ],
            [
                'patient_id' => $patients[1]->id,
                'doctor_id' => $doctors[1]->id,
                'room_id' => $doctors[1]->room_id,
                'appointment_date' => now()->addDays(5)->format('Y-m-d'),
                'appointment_time' => '13:00:00',
                'status' => 'pending',
                'notes' => 'Neurological consultation',
            ],
        ]);
    }
}
