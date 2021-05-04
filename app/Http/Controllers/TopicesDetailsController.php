<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TopicesDetails;
use App\Topices;

class TopicesDetailsController extends Controller
{
    public function create(){

        $topices = Topices::all();
        return view('backend.topic_details.create',compact('topices'));
    }

    public function store(Request $request){
       
        $request->validate([
            'topic_id' => 'required',
            'description' => 'required',
            'file' => 'required',
            'video_path' => 'required'
        ]);

        $data = new TopicesDetails();

        $data->topices_id = $request->topic_id;
        $data->description = $request->description;
        $data->file = $request->file;
        $data->video_path = $request->video_path;
        $data->created_by = $request->created_by;
        $data->save();

        return redirect()->route('top_de.list');
    }

    public function list(){
        $all_data = TopicesDetails::with('topices')->get();
        return view('backend.topic_details.list',compact('all_data'));
    }

    public function view($id){
        $data = TopicesDetails::with('topices')->findorfail($id);
        return view('backend.topic_details.view',compact('data'));
    }

    public function edit($id){

        $topices = Topices::all();
        $data = TopicesDetails::findorfail($id);
        return view('backend.topic_details.edit',compact('data','topices'));
    }

    public function update(Request $request){

        $request->validate([
            'topic_id' => 'required',
            'description' => 'required',
            'file' => 'required',
            'video_path' => 'required'
        ]);;

        $data = TopicesDetails::findorfail($request->id);

        $data->topices_id = $request->topic_id;
        $data->description = $request->description;
        $data->file = $request->file;
        $data->video_path = $request->video_path;
        $data->updated_by = $request->updated_by;
        $data->save();

        return redirect()->route('top_de.list');
    }

    public function delete($id){
        $data = TopicesDetails::findorfail($id);
        $data->delete();

        return redirect()->route('top_de.list');
    }
}
