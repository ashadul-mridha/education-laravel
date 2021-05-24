<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topices;
use App\Topicstype;
use Toastr;
use Str;

class TopicesController extends Controller
{
    public function topices_type(){
        return view('backend.topices.type_create');
    }

    public function topices_type_store(Request $request){
        
        $request->validate([
            'topices_type' => 'required',
        ]);

        $data = new Topicstype();

        $data->topics_type = $request->topices_type;
        $data->topics_slug = $request->topices_type.Str::random();
        $data->created_by = $request->created_by;
        $data->save();

        Toastr::info(' Topices Type Create Successfully', 'Done', ["positionClass" => "toast-top-right"]);

        return redirect()->route('topices_type.list');
    }

    public function topices_type_list(){
        $all_data = Topicstype::all();
        return view('backend.topices.type_list',compact('all_data'));
    }

    public function create(){

        $topics_type = Topicstype::all();
        return view('backend.topices.create',compact('topics_type'));
    }

    public function store(Request $request){
        
        $request->validate([
            'topices_title' => 'required',
            'topices_type' => 'required',
            'topices_view' => 'required'
        ]);

        $data = new Topices();

        $data->topices_title = $request->topices_title;
        $data->topices_title_slug = $request->topices_title.Str::random();
        $data->topices_type = $request->topices_type;
        $data->topices_view = $request->topices_view;
        $data->created_by = $request->created_by;
        $data->save();

        Toastr::info(' Topices Title Added Successfully', 'Done', ["positionClass" => "toast-top-right"]);

        return redirect()->route('topices.list',$data->topices_type);
    }

    public function list($slug){
        $all_data = Topices::with('topices_data')->where('topices_type', '=', $slug)->get();
        return view('backend.topices.list',compact('all_data'));
    }

    public function view($id){
        $data = Topices::findorfail($id);
        return view('backend.topices.view',compact('data'));
    }

    public function edit($id){

        $data = Topices::with('topices_data')->findorfail($id);
        $topics_type = topicstype::all();
        return view('backend.topices.edit',compact('data','topics_type'));
    }

    public function update(Request $request){
        
        $request->validate([
            'topices_title' => 'required',
            'topices_type' => 'required',
            'topices_view' => 'required'
        ]);

        $data = Topices::findorfail($request->id);

        $data->topices_title = $request->topices_title;
        $data->topices_type = $request->topices_type;
        $data->topices_view = $request->topices_view;
        $data->updated_by = $request->updated_by;
        $data->save();

        Toastr::info(' Topices Title Updated Successfully', 'Done', ["positionClass" => "toast-top-right"]);

        return redirect()->route('topices.list',$data->topices_type);
    }

    public function delete($id){
        $data = Topices::findorfail($id);
        $data->delete();

        Toastr::error(' Topices Title Deleted Successfully', 'Done', ["positionClass" => "toast-top-right"]);

        return redirect()->route('topices.list',$data->topices_type);
    }
    
}
