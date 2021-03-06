<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Speciality;
use Illuminate\Http\Request;

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
        $doctors = Doctor::where('speciality_id', $id)->get();
        $speciality = Speciality::where('id', $id)->first();
        return view('doctor.list', ['doctors' => $doctors, 'speciality' => $speciality]);
    }
    // Show doctor information in profile
    public function doctorProfile(Request $request, $id)
    {
        $doctor = Doctor::find($id);
        $speciality_id = Doctor::select('speciality_id')->where('id', $id)->value('speciality_id');
        $speciality = Speciality::where('id', $speciality_id)->first();
        return view('doctor.profile', ['doctor' => $doctor, 'speciality_id' => $speciality_id, 'speciality' => $speciality]);
    }
    // get date and time doctors
    public function dateTime(Request $request)
    {
    }
}
