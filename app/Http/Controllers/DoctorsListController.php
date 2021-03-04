<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

class DoctorsListController extends Controller
{
    public function all(Request $request){
        $doctor_info = Doctor::latest()->paginate(4);
        return view('doctorslist',['doctor_info'=>$doctor_info]);
    
    }
    
}
