<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutUs;
use DB;
use Toastr;

class AboutUsController extends Controller
{
    public function create(){

        return view('backend.about_us.create');
    }

    public function store(Request $request){
       
        $request->validate([
            'description' => 'required',
            'title' => 'required',
        ]);

        $data = new AboutUs();

        $data->title = $request->title;
        $data->description = $request->description;
        $data->created_by = $request->created_by;

        

        if ($request->hasFile('image')) {
            $image_file = $request->file('image');
            $image_file_name = date("Ymdhis") . '.' . $image_file->getClientOriginalExtension();
            $image_file->move(public_path('Public/aboutus/image') , $image_file_name);
        }

        $data->image = $image_file_name;

        $data->save();

        Toastr::info('About Us Added Successfully', 'Done', ["positionClass" => "toast-top-right"]);

        return redirect()->route('about_us.list');
    }

    public function list(){
        $all_data = AboutUs::all();
        return view('backend.about_us.list',compact('all_data'));
    }

    public function view($id){
        $data = AboutUs::findorfail($id);
        return view('backend.about_us.view',compact('data'));
    }

    public function edit($id){

        $data = AboutUs::findorfail($id);
        return view('backend.about_us.edit',compact('data'));
    }

    public function update(Request $request){
        
        $request->validate([
            'description' => 'required',
            'title' => 'required',
        ]);

        $data = AboutUs::findorfail($request->id);


        $data->title = $request->title;
        $data->description = $request->description;
        $data->created_by = $request->created_by;
        

        if ($request->hasFile('image')) {

            $m = DB::table('about_us')->where('id',$request->id)->first();
            $old_image = $m->image;
            if(file_exists($old_image)){
                unlink(public_path('Public/aboutus/image').'/'.$data->image);
            }
            
            $image = $request->file('image');
            $image_name = date("Ymdhis") . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('Public/aboutus/image') , $image_name);
            $data->image = $image_name;
            
            
        }
        else {
            $m = DB::table('about_us')->where('id',$request->id)->first();
            $old_image = $m->image;
            $data->image = $old_image;

        }


        $data->save();
        Toastr::info('About Us Updated Successfully', 'Done', ["positionClass" => "toast-top-right"]);

        return redirect()->route('about_us.list');
    }

    public function delete($id){
        $data = AboutUs::findorfail($id);

        $image = $data->image;
        if(file_exists($image)){
            unlink(public_path('Public/aboutus/image').'/'.$data->image);
        }

        $data->delete();

        Toastr::error('About Us Deleted Successfully', 'Done', ["positionClass" => "toast-top-right"]);

        return redirect()->route('about_us.list');
    }
}
