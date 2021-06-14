<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class ApprovalController extends Controller {
    public function show() {
        $companies = Company::all()->where('verified', '==', 0);

        return view('admin.approvals')->with('companies', $companies);
    }


    public function update($id) {
        $company = Company::find($id);
        $company->verified = true;
        $company->update();

        return redirect()->route('adminApprovals');
    }

}
