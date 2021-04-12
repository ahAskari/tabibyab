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
        // Time::where('id', $request->item_id)->where('user_id', $request->doctor_id)->update(['reserved' => 'true']);
        // dd($request);
        // $reserve = Appointment::firstOrCreate(
        //     [
        //         'doctor_id' => $request->doctor_id,
        //         'user_id' => $request->user_id,
        //         'time_id' => $request->time_id,
        //         'fa_doctor' => $request->fa_doctor,
        //         'fa_user' => $request->fa_user,
        //         'fa_hour' => $request->fa_hour,
        //         'fa_date' => $request->fa_date,
        //         ]
        //     );
            // foreach ($reserve->all() as $key => $item){
            //     if (strpos($key, 'fa_hour') !== false) {
            //         $fa_hour = $item;
            //     }
            // }


        //     dd($reserve);
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

        // $request->reserved = $request->reserved;
        // $times->update($request->all());
        // dd($request);

        return back()->with('success', true);
    }
}
