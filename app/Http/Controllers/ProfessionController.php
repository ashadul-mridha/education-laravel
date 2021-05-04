<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profession;

class ProfessionController extends Controller
{
    public function create(){

       
        return view('backend.profession.create');
    }

    public function store(Request $request){
        
        $request->validate([
            'title' => 'required',
            'img_path' => 'required',
            'profession_link' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $data = new Profession();

        $data->title = $request->title;
        $data->img_path = $request->img_path;
        $data->profession_link = $request->profession_link;
        $data->start_date = $request->start_date;
        $data->end_date = $request->end_date;
        $data->created_by = $request->created_by;
        $data->save();

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
            'img_path' => 'required',
            'profession_link' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $data = Profession::findorfail($request->id);

        $data->title = $request->title;
        $data->img_path = $request->img_path;
        $data->profession_link = $request->profession_link;
        $data->start_date = $request->start_date;
        $data->end_date = $request->end_date;
        $data->updated_by = $request->updated_by;
        $data->save();

        return redirect()->route('profession.list');
    }

    public function delete($id){
        $data = Profession::findorfail($id);
        $data->delete();

        return redirect()->route('profession.list');
    }
    
}
