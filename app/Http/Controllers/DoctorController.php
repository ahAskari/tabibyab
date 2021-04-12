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
        // where('is_doctor', 'true')->
        $id = $request->get('specialyList');
        // go to speciality and check id if equal to speciality_id in doctor table retun this (doctor)
        $speciality = Speciality::find($id);
        $user_doctor = User::where('speciality_id', $id)->paginate(4);
        return view('doctor.list', ['speciality' => $speciality, 'user_doctor' => $user_doctor]);
    }

    // show doctor list
    public function allDoctor(Request $request)
    {
        $doctors = User::where('speciality_id', '!=', 'null')->paginate(4);
        return view('doctor.list', ['doctors' => $doctors]);
    }

    // Show doctor information in profile
    public function doctorProfile(Request $request, $id)
    {
        $doctor = User::find($id);
        $speciality = User::find($id)->speciality;
        // find($id)->
        $time = Time::where('reserved','!=','true')->where('user_id',$id)->get();
        $comments = Comment::where('doctor_id', $id)->get();
        if (Auth::user()) {
            $userCheck = Appointment::where('doctor_id', $id)->where('user_id', Auth::user()->id)->first();
            return view('doctor.profile', ['doctor' => $doctor, 'speciality' => $speciality, 'time' => $time, 'comments' => $comments, 'userCheck' => $userCheck]);
        }
        return view('doctor.profile', ['doctor' => $doctor, 'speciality' => $speciality, 'time' => $time, 'comments' => $comments]);
    }
}
