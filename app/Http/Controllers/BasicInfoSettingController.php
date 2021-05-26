<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BasicInfoSetting;
use DB;
use Toastr;
class BasicInfoSettingController extends Controller
{
    public function create(){

        // $topices = Topices::all();
        return view('backend.setting.create');
    }

    public function store(Request $request){

        $request->validate([
            'title' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'fb_link' => 'required',
            'youtube_link' => 'required',
            'linkedin_link' => 'required',
            'address' => 'required',
            'copywright_text' => 'required',
            'logo' => 'required'
        ]);

        $data = new BasicInfoSetting();

        
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logo_name = date("Ymdhis") . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('Public/setting/logo') , $logo_name);
        }

        if ($request->hasFile('favicon')) {
            $favicon = $request->file('favicon');
            $favicon_name = date("Ymdhis") . '.' . $favicon->getClientOriginalExtension();
            $favicon->move(public_path('Public/setting/favicon') , $favicon_name);
        }

        $data->title = $request->title;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->fb_link = $request->fb_link;
        $data->youtube_link = $request->youtube_link;
        $data->linkedin_link = $request->linkedin_link;
        $data->address = $request->address;
        $data->copywright_text = $request->copywright_text;
        $data->logo = $logo_name;
        $data->favicon = $favicon_name;
        $data->created_by = $request->created_by;
        $data->save();

        Toastr::info('Setting Added Successfull', 'Done', ["positionClass" => "toast-top-right"]);

        return redirect()->route('setting.list');
    }

    public function list(){
        $all_data = BasicInfoSetting::get();
        return view('backend.setting.list',compact('all_data'));
    }

    public function view($id){
        $data = BasicInfoSetting::findorfail($id);
        return view('backend.setting.view',compact('data'));
    }

    public function edit($id){

        $data = BasicInfoSetting::findorfail($id);
        return view('backend.setting.edit',compact('data'));
    }

    public function update(Request $request){

        $request->validate([
            'title' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'fb_link' => 'required',
            'youtube_link' => 'required',
            'linkedin_link' => 'required',
            'address' => 'required',
            'copywright_text' => 'required',
            
        ]);

        $data = BasicInfoSetting::findorfail($request->id);
        

        if ($request->hasFile('logo')) {

            $m = DB::table('basic_info_settings')->where('id',$request->id)->first();
            $old_logo = $m->logo;
            if(file_exists($old_logo)){
                unlink(public_path('Public/setting/logo').'/'.$data->logo);
            }
            
            
            $logo = $request->file('logo');
            $logo_name = date("Ymdhis") . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('Public/setting/logo') , $logo_name);
            $data->logo = $logo_name;
            
            
        }
        else {
            $m = DB::table('basic_info_settings')->where('id',$request->id)->first();
            $logo = $m->logo;
            $data->logo = $logo;

        }
        

        if ($request->hasFile('favicon')) {

            $m = DB::table('basic_info_settings')->where('id',$request->id)->first();
            $favicon = $m->favicon;
            if(file_exists($favicon)){
                unlink(public_path('Public/setting/favivon').'/'.$data->favicon);
            }
            
            $favicon = $request->file('favicon');
            $favicon_name = date("Ymdhis") . '.' . $favicon->getClientOriginalExtension();
            $favicon->move(public_path('Public/setting/favicon') , $favicon_name);
            $data->favicon = $favicon_name;
            
            
        }
        else {
            $m = DB::table('basic_info_settings')->where('id',$request->id)->first();
            $favicon = $m->favicon;
            $data->favicon = $favicon;

        }


        $data->title = $request->title;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->fb_link = $request->fb_link;
        $data->youtube_link = $request->youtube_link;
        $data->linkedin_link = $request->linkedin_link;
        $data->address = $request->address;
        $data->copywright_text = $request->copywright_text;
        $data->updated_by = $request->updated_by;
        $data->save();


        Toastr::info('Setting Updated Successfull', 'Done', ["positionClass" => "toast-top-right"]);

        return redirect()->route('setting.list');
    }

    public function delete($id){

        $data = BasicInfoSetting::findorfail($id);

        $logo = $data->logo;
        if(file_exists($logo)){
            unlink(public_path('Public/setting/logo').'/'.$data->logo);
        }
        
        $favicon = $data->favicon;
        if(file_exists($favicon)){
            unlink(public_path('Public/setting/favivon').'/'.$data->favicon);
        }

        $data->delete();

        Toastr::error('Setting Deleted Successfull', 'Yes', ["positionClass" => "toast-top-right"]);

        return redirect()->route('setting.list');
    }
}
