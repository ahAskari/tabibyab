<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Comment;
use App\Models\User;
use App\Models\Doctor;
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

    // show doctor list
    public function allDoctor(Request $request)
    {
        $doctors = User::where('speciality_id', '!=', 'null')->paginate(4);
        return view('doctor.list', ['doctors' => $doctors]);
    }

    // show doctor with check speciality
    public function doctorList(Request $request)
    {
        $id = $request->get('specialyList');
        // go to speciality and check id if equal to speciality_id in User table retun this (doctor)
        $speciality = Speciality::find($id);
        return view('doctor.list', ['speciality' => $speciality]);
    }

    // Show doctor information in profile
    public function doctorProfile(Request $request, $id)
    {
        $doctor = User::find($id);
        $speciality = User::find($id)->speciality;
        $time = Time::where('reserved','!=','true')->where('user_id',$id)->get();
        $comments = Comment::where('doctor_id', $id)->get();
        if (Auth::user()) {
            $userCheck = Appointment::where('doctor_id', $id)->where('user_id', Auth::user()->id)->first();
            return view('doctor.profile', ['doctor' => $doctor, 'speciality' => $speciality, 'time' => $time, 'comments' => $comments, 'userCheck' => $userCheck]);
        }
        return view('doctor.profile', ['doctor' => $doctor, 'speciality' => $speciality, 'time' => $time, 'comments' => $comments]);
    }
}