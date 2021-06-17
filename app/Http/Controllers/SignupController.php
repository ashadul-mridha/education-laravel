<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
Use Hash;
use Toastr;
use Carbon\Carbon;

class SignupController extends Controller
{
    
    public function signup_form(){
        return view('auth.signup');
    }

    public function register(Request $request){
        
        $request->validate([
            'name' => 'required',
            'mobile' => 'numeric|max:15',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8',
            'conform_password' => 'required_with:password|same:password|min:8',
            'image' => 'required|image'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = date("Ymdhis") . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('Public/user/images') , $image_name);
        }

       DB::table('users')->insert([
        'name'      => $request->name,
        'mobile'    => $request->phone,
        'email'     => $request->email,
        'role'      => $request->role,
        'userType'  => $request->role,
        'slug'      => $request->role,
        'password'  => Hash::make($request->password),
        'gender'    => $request->gender,
        'address'     => $request->address,
        'image'      => $image_name,
        'created_at' => Carbon::now()
    ]);

    Toastr::info('Registration Successfull', 'Done', ["positionClass" => "toast-top-right"]);

    return redirect()->route('frontend.home');


    }
}
