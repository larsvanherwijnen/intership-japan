<?php

namespace App\Http\Controllers\Auth;

use App\Models\Company;
use App\Models\Educator;
use App\Models\Intern;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Monarobase\CountryList\CountryList;
use Monarobase\CountryList\CountryListFacade;

class RegisterController extends Controller
{
    public function showUserForm()
    {
        $countries = CountryListFacade::getList('en');
        return view('user.auth.register', compact('countries'));
    }

    public function createUser($request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required',
            'password' => 'required|confirmed',
        ]);

        $createdUser = User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'is_admin' => false,
        ]);

        return $createdUser;
    }

    public function createUserRole(Request $request)
    {
        $user = $this->createUser($request);

        if ($request->role == 1) {
            $this->validate($request, [
                'nationality' => 'required|max:255',
                'Currentlyliving' => 'required|max:255',
                'field' => 'required|max:255',
                'graduated' => 'required',
                'nativelanguage' => 'required',
            ]);

            $itern = Intern::create([
                'Nationality' => $request->nationality,
                'livingIn' => $request->Currentlyliving,
                'fieldOfStudies' => $request->field,
                'graduated' => $request->graduated,
                'currentlyStudying' => $request->CurrentlyStudent,
                'nativeLanguages' => $request->nativelanguage,
                'secondsLanguages' => $request->nativelanguage,
                'seekingInternship' => $request->field,
                'openForEmployment' => $request->employment,
            ]);

            $user->intern()->save($itern);
        }

        if ($request->role == 2) {

            $this->validate($request, [
                'companyname' => 'required|max:255',
            ]);

            $company = Company::create([
                'companyname' => $request->companyname,
                'verified' => false,
            ]);

            $user->company()->save($company);
        }

        if ($request->role == 3) {
            $this->validate($request, [

            ]);

            $educator = Educator::create([

            ]);

            $user->educator()->save($educator);
        }


    }


    public function createAdmin(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => true,
        ]);


        return redirect()->route('admin');
    }

}
