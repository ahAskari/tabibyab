<?php

namespace App\Models;

use App\Models\Time;
use App\Models\Doctor;
use App\Models\Comment;
use App\Models\Speciality;
use Illuminate\Notifications\Notifiable;
use App\Services\Permission\Traits\HasRoles;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Services\Permission\Traits\HasPermissions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasPermissions, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_doctor',
        'speciality_id',
        'tell_no',
        'address',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute($value)
    {
        return asset($value);
    }


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
    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }
}
