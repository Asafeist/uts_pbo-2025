<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Room::insert([
            ['room_number' => '101', 'floor' => '1', 'type' => 'Consultation'],
            ['room_number' => '102', 'floor' => '1', 'type' => 'Consultation'],
            ['room_number' => '201', 'floor' => '2', 'type' => 'Examination'],
        ]);
    }
}
