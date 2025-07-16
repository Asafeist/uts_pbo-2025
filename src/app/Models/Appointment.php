<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public function patients() {
        return $this->belongsTo(Patient::class);
    }

    public function doctors() {
        return $this->belongsTo(Doctor::class);
    }

    protected $fillable = [
        'patient_id', 'doctor_id', 'appointment_date', 'appointment_time', 'complaint', 'status'
    ];

}
