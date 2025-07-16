<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'name', 'nik', 'birth_date', 'gender', 'address', 'phone_number', 'email'
    ];

    public function appointments() {
        return $this->hasMany(Appointment::class);
    }
}
