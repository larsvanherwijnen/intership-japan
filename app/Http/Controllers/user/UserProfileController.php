<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserProfileController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function profileShow($id) {
        $userData = DB::table('users')->get()->where('id', '=', $id);
        return view('user.profile')->with($userData);
    }
}
