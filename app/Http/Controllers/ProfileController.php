<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
        public function profileShow($id){
           $userData = DB::table('users')->get()->where('id' ,'=', $id);
           return view('user.profile')->with($userData);
        }
}
