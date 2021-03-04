<?php

namespace App\Http\Controllers;

use App\Models\Speciality;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request){
        $title = Speciality::all();
        return view('index',['title'=> $title]);
    }
}
