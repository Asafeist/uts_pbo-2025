<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'name',
        'gender',
        'date_of_birth',
        'phone',
        'email',    
    ];
    
    public function appointments() {
    return $this->hasMany(Appointment::class);
}
}
