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

    public function reserve(Request $request, Time $times)
    {
        Time::where('id', $request->item_id)->where('user_id', $request->doctor_id)->update(['reserved' => 'true']);
        $reserve = new Appointment();
        $reserve->doctor_id = $request->doctor_id;
        $reserve->user_id = $request->user_id;
        $reserve->time_id = $request->user_id;
        $reserve->fa_user = $request->fa_user;
        $reserve->fa_doctor = $request->fa_doctor;
        $reserve->fa_time = $request->fa_time;
        $reserve->fa_hour = $request->fa_hour;
        $reserve->save();


      
        // $is_reserved = $request->item_id;
        // $is_reserved->reserved = $request->reserved;
        // $times->update($request->all());
        // $is_reserved->update($request->all());

        return back()->with('success', true);
    }
}
