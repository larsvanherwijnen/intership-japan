<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserProfileController extends Controller
{

    public function profileShow($id) {
        $user = User::find($id);

        return view('user.profile')->with('user', $user);
    }

}
