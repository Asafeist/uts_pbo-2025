<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public function department() {
        return $this->belongsTo(Department::class);
    }

    public function room() {
        return $this->belongsTo(Room::class);
    }

    public function schedules() {
        return $this->hasMany(DoctorSchedule::class);
    }

    public function appointments() {
        return $this->hasMany(Appointment::class);
    }
}
