<?php

namespace App\Http\Controllers;

use App\Models\Speciality;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function userProfile(Request $request)
    {
        $user_id = auth()->user()->id;
        $user = User::where('id', $user_id)->first();


        return view('profile.user_profile', ['user' => $user]);
    }
    public function userEdit(Request $request)
    {

        return back()->with('success', true);
    }
    public function doctorProfile(Request $request)
    {
        $doctor = User::where('id', Auth::user()->id)->first();
        $profile_img = $doctor->profile_img;
        $speciality = User::find(Auth::user()->id)->speciality;
        $time = User::find(Auth::user()->id);
        $speciality_list = Speciality::all();
        return view('profile.doctor_profile', ['doctor' => $doctor, 'time' => $time, 'speciality' => $speciality, 'profile_img' => $profile_img, 'speciality_list' => $speciality_list]);
    }
    public function EditDoctorProfile(Request $request)
    {
        if ($request->has('submit')) {
            $user = Auth::user();
            $user->profile_img = $request->profile_img;
            $user->name = $request->name;
            // $user->email = $request->email;
            $user->speciality_id = $request->speciality_id;
            $user->tell_no = $request->tell_no;
            $user->address = $request->address;
            $user->update($request->all());
        }

        return back()->with('success', true);
    }
}
