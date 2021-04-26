<?php

namespace App\Models;

use App\Models\Time;
use App\Services\Permission\Traits\HasPermissions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    use HasFactory, HasPermissions;
    protected $fillable = [
        'name',
        'avatar',
        'gender',
        'tell_nu',
        'address',
    ];

    public function speciality()
    {
        return $this->belongsTo(Speciality::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function times()
    {
        return $this->hasMany(Time::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
