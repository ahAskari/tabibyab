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
    public function doctorProfile(Request $request)
    {
    }

    // get date and time doctors
    public function dateTime(Request $request)
    {
    }

    //==========================================
    // public function insert_image(Request $request){
    //     $request->validate([
    //         'name' => 'required',
    //         'profile_img' => 'required|image|max:2048'
    //     ]);
    //     $image_file = $request->profile_img;
    //     $image = Doctor::make($image_file);
    //     Response::make($image->encode('jpeg'));

    //     $form_data = array(
    //         'name' => $request->name,
    //         'profile_img' => $image
    //     );

    //     Doctor::create($form_data);
    //     return redirect()->back()->with('success', 'Image store in database successfully');

    // }

    // function fetch_image($image_id){
    //     $image = Doctor::findOrFail($image_id);
    //     $image_file = Doctor::make($image->profile_img);
    //     $response = Response::make($image_file->encode('jpeg'));

    //     $response->header('Content-type', 'image/jpeg');
    //     return $response;
    // }
    //==========================================
}
