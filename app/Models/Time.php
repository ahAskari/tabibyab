<?php

namespace App\Models;

use App\Models\Appointment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Time extends Model
{
    use HasFactory;
    protected $fillable =[
        'date',
        'hour',
        'user_id',
        'reserved',
        
    ];

    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }
}
