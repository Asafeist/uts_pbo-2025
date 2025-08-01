<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function doctors() {
        return $this->hasMany(Doctor::class);
    }  

    public function appointments() {
        return $this->hasMany(Appointment::class);
    }
}
