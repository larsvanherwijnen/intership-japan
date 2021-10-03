<?php

namespace App\Http\Controllers\auth;

use App\Models\Company;
use App\Models\Educator;
use App\Models\Intern;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Monarobase\CountryList\CountryListFacade;

class RegisterController extends Controller {
    public function showUserForm() {
        $countries = CountryListFacade::getList('en');
        return view('user.auth.register', compact('countries'));
    }

    public function showAdminForm() {
        return view('admin.auth.register');
    }

    public function createUser($request) {
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
            'role_id' => $request->role,
        ]);

        return $createdUser;
    }

    public function createUserRole(Request $request) {
        $user = $this->createUser($request);

        if ($request->role == 1) {
            $this->validate($request, [
                'nationality' => 'required|max:255',
                'Currentlyliving' => 'required|max:255',
                'field' => 'required|max:255',
                'graduated' => 'required',
                'nativelanguage' => 'required',
                'about' => 'required|min:20',
                'intern_image' => 'required|image|mimes: jpeg,png,jpg|max:2048'
            ]);

            $intern = Intern::create([
                'Nationality' => $request->nationality,
                'livingIn' => $request->Currentlyliving,
                'fieldOfStudies' => $request->field,
                'graduated' => $request->graduated,
                'currentlyStudying' => $request->CurrentlyStudent,
                'nativeLanguages' => $request->nativelanguage,
                'secondsLanguages' => $request->nativelanguage,
                'seekingInternship' => $request->field,
                'openForEmployment' => $request->employment,
                'about' => $request->about,
            ]);

            if ($request->hasFile('intern_image')) {
                $profile_image = $request->file('intern_image')->getClientOriginalName();
                $request->file('intern_image')->storeAs('intern_images', $user->id . '/' . $profile_image, '');
                $intern->update(['image' => $profile_image]);
            }

            $user->intern()->save($intern);


            return redirect()->route('profile', $user->id);
        }

        if ($request->role == 2) {

           $this->validate($request, [
                'comp_name' => 'required|max:255',
                'comp_email' => 'required|email|max:255',
                'comp_contact_name' => 'required|max:255',
                'comp_contact_email' => 'required|email|max:255',
            ]);


                $company = Company::create([
                    'comp_name' => $request->comp_name,
                    'comp_email' => $request->comp_email,
                    'comp_contact_name' => $request->comp_contact_name,
                    'comp_contact_email' => $request->comp_contact_email,
                    'verified' => false,
                ]);

                if ($request->hasFile('comp_image')) {
                    $profile_image = $request->file('comp_image')->getClientOriginalName();
                    $request->file('comp_image')->storeAs('companies_images', $user->id . '/' . $profile_image, '');
                    $company->update(['image' => $profile_image]);
                }
                $user->company()->save($company);

                User::destroy($user);

        }

//        if ($request->role == 3) {
//            $this->validate($request, [
//
//            ]);
//
//            $educator = Educator::create([
//
//            ]);
//
//            if ($request->hasFile('image')) {
//                $profile_image = $request->file('image')->getClientOriginalName();
//                $request->file('image')->storeAs('educators_images', $user->id . '/' . $profile_image, '');
//                $educator->update(['image' => $profile_image]);
//            } else {
//                dd('test');
//            }
//
//            $user->educator()->save($educator);
//        }

    }


    public function createAdmin(Request $request) {
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
