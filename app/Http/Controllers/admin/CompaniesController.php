<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function show() {
        $companies = Company::all()->where('is_admin', '==', 0)->where('role_id', '==', 2);
        return view('admin.companies')->with('companies', $companies);
    }


    public function update($id) {
        $company = Company::find($id);
        $company->verified = true;
        $company->update();

        return redirect()->route('adminApprovals');
    }


}
