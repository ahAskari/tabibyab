<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Hour;
use App\Models\Doctor;
use App\Models\Day_hour;
use App\Models\Speciality;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

class DoctorController extends Controller
{
    // return Speciality title
    public function all(Request $request)
    {
        $title = Speciality::all();
        return view('index', ['title' => $title]);
    }

    // show doctor lists
    public function doctorList(Request $request)
    {
        $id = $request->get('specialyList');
        // go to speciality and check id if equal to speciality_id in doctor table retun this (doctor)
        $speciality = Speciality::findOrfail($id);
        return view('doctor.list', ['speciality' => $speciality]);
    }

    // Show doctor information in profile
    public function doctorProfile(Request $request, $id)
    {
        $doctor = Doctor::find($id);
        $speciality = Doctor::find($id)->speciality;
        $time = Doctor::find($id);
        $comment = Doctor::find($id);
        return view('doctor.profile', ['doctor' => $doctor, 'speciality' => $speciality, 'time' => $time, 'comment'=> $comment]);
    }
    // get date and time doctors
    public function dateTime(Request $request, $id)
    {
        // $day_hour= Day_hour::where('doctor_id',$id)->first();
        // foreach($day_hour as $day_hour){
        //     print $day_hour->day_id;
        // }
        // $day = Day::where('id', $day_hour->day_id)->get();
        // return $day;
        // foreach($day as $day){

        // }
    }
}
