<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Intern;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class InternController extends Controller
{
    public function show() {
        $allUsers = User::all()->where('is_admin', '==', 0)->where('role_id', '==', 1);

        return view('admin.intern')->with('users', $allUsers);
    }

    public function delete($id){
        User::destroy($id);
        return  redirect()->route('adminInterns')->with('succes', 'User had been deleted');
    }


}
