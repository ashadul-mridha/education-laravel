<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topices;
use Toastr;

class TopicesController extends Controller
{
        public function create(){

        
        return view('backend.topices.create');
    }

    public function store(Request $request){
        
        $request->validate([
            'topices_title' => 'required',
            'topices_type' => 'required',
            'topices_view' => 'required'
        ]);

        $data = new Topices();

        $data->topices_title = $request->topices_title;
        $data->topices_type = $request->topices_type;
        $data->topices_view = $request->topices_view;
        $data->created_by = $request->created_by;
        $data->save();

        Toastr::info(' Topices Added Successfully', 'Done', ["positionClass" => "toast-top-right"]);

        return redirect()->route('topices.list');
    }

    public function list(){
        $all_data = Topices::all();
        return view('backend.topices.list',compact('all_data'));
    }

    public function view($id){
        $data = Topices::findorfail($id);
        return view('backend.topices.view',compact('data'));
    }

    public function edit($id){

        $data = Topices::findorfail($id);
        return view('backend.topices.edit',compact('data'));
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

        Toastr::info(' Topices Updated Successfully', 'Done', ["positionClass" => "toast-top-right"]);

        return redirect()->route('topices.list');
    }

    public function delete($id){
        $data = Topices::findorfail($id);
        $data->delete();

        Toastr::error(' Topices Deleted Successfully', 'Done', ["positionClass" => "toast-top-right"]);

        return redirect()->route('topices.list');
    }
    
}
