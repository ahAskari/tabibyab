<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Comment;
use App\Models\Day;
use App\Models\Hour;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Day_hour;
use App\Models\Speciality;
use App\Models\Time;
use Auth;
use PhpParser\Comment\Doc;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    // return Speciality title
    public function all(Request $request)
    {
        $title = Speciality::all();
        return view('index', ['title' => $title]);
    }

    // show doctor with check speciality
    public function doctorList(Request $request)
    {
        $id = $request->get('specialyList');
        // go to speciality and check id if equal to speciality_id in doctor table retun this (doctor)
        $speciality = Speciality::find($id);
        $user_doctor = User::where('is_doctor', 'true')->where('speciality_id', $id)->paginate(4);
        return view('doctor.list', ['speciality' => $speciality, 'user_doctor' => $user_doctor]);
    }

    // show doctor list
    public function allDoctor(Request $request)
    {
        $doctors = User::where('speciality_id', '!=' ,'null')->paginate(4);
        return view('doctor.list', ['doctors' => $doctors]);
        // $doctors = User::paginate();
        // foreach($doctors as $doctor){
        //     return $doctor->date_time_id;

        // }

        // $times = User::find(6)->times;
        // return $time->date_time_id;
        // $time = User::find(1);
        // foreach ($time->times as $item){
        //     return $item->hour;

        // }
        // $doctors = User::where('is_doctor', 'true')->get();
    }

    // Show doctor information in profile
    public function doctorProfile(Request $request, $id)
    {
        $doctor = User::find($id);
        $speciality = User::find($id)->speciality;
        $time = User::find($id);        
        $comments = Comment::where('doctor_id',$id)->get();
        $userCheck = Appointment::where('doctor_id', $id)->where('user_id',Auth::user()->id)->first();
        // if(empty($userCheck)){
        //     return 'تا به حال با این پزشکی نوبتی نداشته اید';
        // }
        // else{
        //     return $userCheck;
        // }
        return view('doctor.profile', ['doctor' => $doctor, 'speciality' => $speciality, 'time' => $time, 'comments' => $comments, 'userCheck' => $userCheck]);
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
