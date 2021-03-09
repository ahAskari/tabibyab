<?php

namespace App\Models;

use App\Models\Time;
use App\Models\Day_hour;
use App\Models\Day_hour_doctor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'profile_img',
        'gender',
        'tell_nu',
        'address'
    ];

    public function speciality()
    {
        return $this->belongsTo(Speciality::class);
    }
    public function times()
    {
        return $this->hasMany(Time::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    // public function day_hour()
    // {
    //     return $this->belongsToMany(Day_hour::class);
    // }
    // public function days()
    // {
    //     return $this->belongsToMany(Day::class);
    // }
    // public function days()
    // {
    //     return $this->belongsToMany(Day_hour::class, 'day_hour','doctor_id','day_id')->withPivot('day_id');
    // }
}
