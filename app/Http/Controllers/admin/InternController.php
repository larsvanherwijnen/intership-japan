<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Intern;
use App\Models\User;
use Illuminate\Http\Request;

class InternController extends Controller
{
    public function show() {
        $allUsers = User::with( 'intern')->get();
        dd($allUsers);

        return view('admin.intern')->with('users', $allUsers);
    }


    public function update($id) {
        $company = Company::find($id);
        $company->verified = true;
        $company->update();

        return redirect()->route('adminApprovals');
    }


}
