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
        $appointment = Appointment::where('user_id', $user_id)->get();
        foreach ($appointment as $item) {
            $timer = Time::where('user_id', $user_id)->where('id', $item->time_id)->get();
            foreach ($timer as $timers) {
                // print ($timers->date . ":" . $timers->hour . ":" . $item->fa_user . ":" . $item->fa_doctor) . '</br>';
            }
        }
        $user = User::where('id', $user_id)->first();


        return view('profile.user_profile', ['user' => $user, 'appointment' => $appointment, 'user_id' => $user_id]);
    }
    public function userEdit(Request $request)
    {

        return back()->with('success', true);
    }
    public function doctorProfile(Request $request)
    {
        $doctor = User::where('id', Auth::user()->id)->first();
        $avatar = $doctor->avatar;
        $speciality = User::find(Auth::user()->id)->speciality;
        $time = User::find(Auth::user()->id);
        $speciality_list = Speciality::all();
        $appointment = Appointment::where('doctor_id', $doctor->id)->get();
        // foreach ($appointment as $item) {
        //     $timer = Time::where('user_id', $doctor->id)->where('id', $item->time_id)->get();
        //     // foreach ($timer as $timers) {
        //     //     // print ($timers->date . ":" . $timers->hour . ":" . $item->fa_user . ":" . $item->fa_doctor) . '</br>';
        //     // }
        // }
        return view('profile.doctor_profile', ['doctor' => $doctor, 'time' => $time, 'speciality' => $speciality, 'avatar' => $avatar, 'speciality_list' => $speciality_list, 'appointment' => $appointment]);
    }
    public function EditDoctorProfile(Request $request)
    {
        if ($request->has('submit')) {

            $rules = [
                'name' => 'required',
                'speciality_id' => 'required',
                'tell_no' => 'required',
                'address' => 'required',
                'avatar' => ['file'],
            ];
            $message = [
                'name.required' => 'اسم را وارد کنید',
                'speciality_id.required' => 'تخصص خود را انتخاب کنید',
                'address.required' => 'ادرس وارد کنید',
                'tell_no.required' => 'شماره تماس را وارد کنید',
            ];


            // if (request('avatar')) {
            //     dd(request('avatar'));
            // }



            $validator = Validator::make($request->all(), $rules, $message);

            if ($validator->fails()) {
                return redirect(route('doctor.update'))
                    ->withErrors($validator)
                    ->withInput();
            }




            $user = Auth::user();
            $user->name = $request->name;
            // $user->avatar = $request->avatar;
            $user->speciality_id = $request->speciality_id;
            $user->tell_no = $request->tell_no;
            $user->address = $request->address;
            $user->lat = $request->lat;
            $user->lng = $request->lng;
            // if ($image = $request->file('avatar')) {

            //     $destinationPath = 'image/';

            //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            //     $image->move($destinationPath, $profileImage);

            //     $input['image'] = "$profileImage";
            // }
            // $imageName = time() . '.' . $request->avatar->extension();

            // $request->avatar->move(public_path('images'), $imageName);
            // if (request('avatar')) { 
            //     $user['avatar'] = request('avatar')->store('images');
            // }
            $user->update($request->all());
            // dd($request->avatar); 
            return back();
        }

        return back()->with('success', true);
    }
    public function select_date_time(Request $request)
    {
        $rules = [
            'date' => 'required', 'unique:times',
            'hour' => 'required',
        ];
        $message = [
            'date.required' => 'لطفا تاریخ ساعت انتخاب کنید',
            'hour.required' => 'please enter hours',
        ];
        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            // return back()->withErrors($validator)->withInput();
            return redirect(route('doctor.profile'))
                ->withErrors($validator)
                ->withInput();
        }

        $doctor_date = Time::firstOrCreate([
            'date' => $request->date,
            'hour' => $request->hour,
            'user_id' => Auth::user()->id,
        ]);
        $doctor_date->save();
        return back()->with('success', true);
    }
}
