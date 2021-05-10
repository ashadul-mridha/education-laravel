<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PreviousQuestionType;
use Toastr;

class PreviousQuestionTypeController extends Controller
{
    public function create(){

        
        return view('backend.previous_question.create');
    }

    public function store(Request $request){


        $request->validate([
            'question_title' => 'required',
            'question_year' => 'required',
        ]);

        $data = new PreviousQuestionType();

        $data->question_title = $request->question_title;
        $data->question_year = $request->question_year;
        $data->created_by = $request->created_by;
        $data->save();

        Toastr::info('Privious Question Added Successfully', 'Done', ["positionClass" => "toast-top-right"]);

        return redirect()->route('pre_ques.list');
    }

    public function list(){
        $all_data = PreviousQuestionType::all();
        return view('backend.previous_question.list',compact('all_data'));
    }

    public function view($id){
        $data = PreviousQuestionType::findorfail($id);
        return view('backend.previous_question.view',compact('data'));
    }

    public function edit($id){

        $data = PreviousQuestionType::findorfail($id);
        return view('backend.previous_question.edit',compact('data'));
    }

    public function update(Request $request){

        $request->validate([
            'question_title' => 'required',
            'question_year' => 'required',
        ]);

        $data = PreviousQuestionType::findorfail($request->id);

        $data->question_title = $request->question_title;
        $data->question_year = $request->question_year;
        $data->updated_by = $request->updated_by;
        $data->save();
        
        Toastr::info('Privious Question Updated Successfully', 'Done', ["positionClass" => "toast-top-right"]);

        return redirect()->route('pre_ques.list');
    }

    public function delete($id){
        $data = PreviousQuestionType::findorfail($id);
        $data->delete();

        Toastr::error('Privious Question  Deleted Successfully', 'Done', ["positionClass" => "toast-top-right"]);

        return redirect()->route('pre_ques.list');
    }
}
