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
    public function showUserForm(){
        $countries = CountryListFacade::getList('en');
        return view('user.auth.register', compact('countries'));
    }

    public function createUser(Request $request)
    {


        $this->validate($request, [
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required',
            'password' => 'required|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'is_admin' => false,
        ]);

        $userId = DB::table('users')->get('id')->last();

        if($request->role == 1){
            Intern::create([

            ]);
        }

        if($request->role == 2){
            Company::create([

            ]);
        }

        if($request->role == 3){
            Educator::create([

            ]);
        }

        return redirect()->route('profile');
    }
    public function createAdmin (Request $request)
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
