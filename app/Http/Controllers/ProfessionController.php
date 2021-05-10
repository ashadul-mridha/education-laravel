<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profession;
use DB;
use Toastr;

class ProfessionController extends Controller
{
    public function create(){

       
        return view('backend.profession.create');
    }

    public function store(Request $request){
        
        $request->validate([
            'title' => 'required',
            'profession_link' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $data = new Profession();

        if ($request->hasfile('img_path')) {

            $img = $request->file('img_path');
            $img_name = date('Ymdhis').'.'.$img->getClientOriginalExtension();
            $img->move(public_path('Public/Profession/Img') , $img_name);
        }

        $data->title = $request->title;
        $data->img_path = $img_name;
        $data->profession_link = $request->profession_link;
        $data->start_date = $request->start_date;
        $data->end_date = $request->end_date;
        $data->created_by = $request->created_by;
        $data->save();

        Toastr::info('Profession Added Successfull', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect()->route('profession.list');
    }

    public function list(){
        $all_data = Profession::all();
        return view('backend.profession.list',compact('all_data'));
    }

    public function view($id){
        $data = Profession::findorfail($id);
        return view('backend.profession.view',compact('data'));
    }

    public function edit($id){

        $data = Profession::findorfail($id);
        return view('backend.profession.edit',compact('data'));
    }

    public function update(Request $request){

        $request->validate([
            'title' => 'required',
            'profession_link' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $data = Profession::findorfail($request->id);
        

        if ($request->hasFile('img_path')) {

            $m = DB::table('professions')->where('id',$request->id)->first();
            $old_img = $m->img_path;
            if(file_exists($old_img)){
                unlink(public_path('Public/Profession/Img').'/'.$data->img_path);
            }
            
            $img = $request->file('img_path');
            $img_name = date("Ymdhis") . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('Public/Profession/Img') , $img_name);
            $data->img_path = $img_name;
            
            
        }
        else {
            $m = DB::table('professions')->where('id',$request->id)->first();
            $img = $m->img_path;
            $data->img_path = $img;

        }

        $data->title = $request->title;
        $data->profession_link = $request->profession_link;
        $data->start_date = $request->start_date;
        $data->end_date = $request->end_date;
        $data->updated_by = $request->updated_by;
        $data->save();


        Toastr::info('Profession Updated Successfull', 'Done', ["positionClass" => "toast-top-right"]);

        return redirect()->route('profession.list');
    }

    public function delete($id){
        $data = Profession::findorfail($id);

        
        
        $img = $data->img_path;
        if(file_exists($img)){
            unlink(public_path('Public/Profession/Img').'/'.$img);
        }

        $data->delete();
        
        Toastr::error('Profession Deleted Successfull', 'Yes', ["positionClass" => "toast-top-right"]);

        return redirect()->route('profession.list');
    }
    
}
