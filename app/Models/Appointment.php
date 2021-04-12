<?php

namespace App\Models;

use App\Models\Time;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'doctor_id',
        'user_id',
        'time_id',
        'fa_doctor',
        'fa_user',
        'fa_date',
        'fa_hour',

    ];
    public function time()
    {
        return $this->belongsTo(Time::class);
    }
}
