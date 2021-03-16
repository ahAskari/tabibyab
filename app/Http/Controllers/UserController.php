<?php

namespace App\Http\Controllers;

use App\Models\User;

use function Ramsey\Uuid\v1;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get();
        return view('users.list',['users'=>$users]);
    }
}
