<?php

namespace App\Http\Controllers;

use App\Models\Time;
use App\Models\User;
use App\Models\Speciality;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
        $appointment = Appointment::where('doctor_id', $doctor->id)->get();

        return view('profile.doctor_profile', ['doctor' => $doctor, 'time' => $time, 'speciality' => $speciality, 'profile_img' => $profile_img, 'speciality_list' => $speciality_list, 'appointment' => $appointment]);
    }
    public function EditDoctorProfile(Request $request)
    {
        if ($request->has('submit')) {
            $user = Auth::user();
            $user->profile_img = $request->profile_img;
            $user->name = $request->name;
            $user->speciality_id = $request->speciality_id;
            $user->tell_no = $request->tell_no;
            $user->address = $request->address;
            $user->lat = $request->lat;
            $user->lng = $request->lng;
            $user->update($request->all());
        }

        return back()->with('success', true);
    }
    public function select_date_time(Request $request)
    {
            $rules = [
                'date' => 'required',
                'hour' => 'required',
            ];
            $message = [
                'date.required' => 'تاریخ و ساعت را انتخاب کنید',
                'hour.required' => 'ساعت را انتخاب کنید',
            ];
            $validator = Validator::make($request->all(), $rules, $message);
            if ($validator->fails()) {
                // return back()->withErrors($validator)->withInput();
                return redirect(route('doctor.profile'))
                ->withErrors($validator)
                ->withInput();
                
            }

            $doctor_date = new Time();
            $doctor_date->date = $request->date;
            $doctor_date->hour = $request->hour;
            $doctor_date->user_id = Auth::user()->id;
            $doctor_date->save();
            return back()->with('success', true);
        }
    }
