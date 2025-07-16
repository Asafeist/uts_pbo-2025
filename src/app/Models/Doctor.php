<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'name', 'specialist', 'no_str', 'practice_schedule'
    ];

    public function appointments() {
        return $this->hasMany(Appointment::class);
    }
}
