<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Doctor;
use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $departments = Department::all();
        $rooms = Room::all();

        Doctor::insert([
            [
                'name' => 'Dr. Sarah Johnson',
                'specialization' => 'Cardiologist',
                'phone' => '081234567891',
                'email' => 'sarah.johnson@example.com',
                'department_id' => $departments->where('name', 'Cardiology')->first()->id,
                'room_id' => $rooms->where('room_number', '101')->first()->id,
            ],
            [
                'name' => 'Dr. Ahmed Rizal',
                'specialization' => 'Neurologist',
                'phone' => '081234567892',
                'email' => 'ahmed.rizal@example.com',
                'department_id' => $departments->where('name', 'Neurology')->first()->id,
                'room_id' => $rooms->where('room_number', '102')->first()->id,
            ],
        ]);
    }
}
