<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Time;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function reserve(Request $request)
    {
        // $reserve->save();
        $reserve = new Appointment();
        $reserve->doctor_id = $request->doctor_id;
        $reserve->user_id = $request->user_id;
        $reserve->time_id = $request->time_id;
        $reserve->fa_user = $request->fa_user;
        $reserve->fa_doctor = $request->fa_doctor;
        $reserve->fa_date = $request->fa_date;
        $reserve->fa_hour = $request->fa_hour;
        $reserve->save();
        
        $time_id = $request->time_id;
        $time = Time::find($time_id);
        $time->reserved = 'true';

        $time->save();
        
        return back()->with('success', true);
    }
}
