<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Educator;
use Illuminate\Http\Request;

class EducatorController extends Controller
{
    public function show() {
        $Educators = Educator::all();

        return view('admin.educators')->with('Educators', $Educators);
    }





}
