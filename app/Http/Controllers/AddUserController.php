<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Carbon\Carbon;
use Toastr;

class AddUserController extends Controller
{
    public function add(){
        
        return view('backend.adduser.adduser_create');
    }

    public function store_user(Request $request){
        
        $request->validate([
            'name' => 'required',
            'mobile' => 'numeric|max:15',
            'email' => 'required|unique:users,email',
            'role'  => 'required',
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

    Toastr::info('Add New User Successfull', 'Done', ["positionClass" => "toast-top-right"]);

    return redirect()->back();
    }
}
