<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuestionDetails;
use App\PreviousQuestionType;
use DB;
use Toastr;

class QuestionDetailsController extends Controller
{
    public function create(){

        $data = PreviousQuestionType::all();
        return view('backend.pre_ques_detail.create',compact('data'));
    }

    public function store(Request $request){

       
        $request->validate([
            'question_type_id' => 'required',
            'title' => 'required',
            'question_file' => 'required',
            'solution_file' => 'required',
        ]);

        $data = new QuestionDetails();

        $data->question_type_id = $request->question_type_id;
        $data->title = $request->title;
        $data->descreption = $request->exam_description;
        $data->created_by = $request->created_by;

        if ($request->hasFile('question_file')) {
            $question_file = $request->file('question_file');
            $question_file_name = date("Ymdhis") . '.' . $question_file->getClientOriginalExtension();
            $question_file->move(public_path('Public/PreQuesDe/QuestionFile') , $question_file_name);
        }

        if ($request->hasFile('solution_file')) {
            $solution_file = $request->file('solution_file');
            $solution_file_name = date("Ymdhis") . '.' . $solution_file->getClientOriginalExtension();
            $solution_file->move(public_path('Public/PreQuesDe/SolutionFile') , $solution_file_name);
        }
	
        
        $data->file = $question_file_name;
        $data->solution_file = $solution_file_name;


        $data->save();

        Toastr::info(' Question Details Added Successfully', 'Done', ["positionClass" => "toast-top-right"]);

        return redirect()->route('pre_ques_de.list');
    }

    public function list(){
        $all_data = QuestionDetails::with('previous_question_type')
        ->get();
        return view('backend.pre_ques_detail.list',compact('all_data'));
    }

    public function view($id){
        
        $data = QuestionDetails::with('previous_question_type')
            ->findorfail($id);
        return view('backend.pre_ques_detail.view',compact('data'));
    }

    public function edit($id){

        $ques_type = PreviousQuestionType::all();
        $data = QuestionDetails::findorfail($id);
        return view('backend.pre_ques_detail.edit',compact('data','ques_type'));
    }

    public function update(Request $request){

        $data = QuestionDetails::findorfail($request->id);

        $data->question_type_id = $request->question_type_id;
        $data->title = $request->title;
        $data->descreption = $request->exam_description;
        $data->updated_by = $request->updated_by;

        if ($request->hasFile('file')) {

            $m = DB::table('question_details')->where('id',$request->id)->first();
            $old_file = $m->file;
            if(file_exists($old_file)){
                unlink(public_path('Public/PreQuesDe/QuestionFile').'/'.$data->file);
            }
            
            $file = $request->file('file');
            $file_name = date("Ymdhis") . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('Public/PreQuesDe/QuestionFile') , $file_name);
            $data->file = $file_name;
            
            
        }
        else {
            $m = DB::table('question_details')->where('id',$request->id)->first();
            $old_file = $m->file;
            $data->file = $old_file;

        }

        if ($request->hasFile('solution_file')) {

            $m = DB::table('question_details')->where('id',$request->id)->first();
            $old_file = $m->solution_file;
            if(file_exists($old_file)){
                unlink(public_path('Public/PreQuesDe/SolutionFile').'/'.$data->solution_file);
            }
            
            $file = $request->file('solution_file');
            $file_name = date("Ymdhis") . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('Public/PreQuesDe/SolutionFile') , $file_name);
            $data->solution_file = $file_name;
            
            
        }
        else {
            $m = DB::table('question_details')->where('id',$request->id)->first();
            $old_file = $m->solution_file;
            $data->solution_file = $old_file;

        }

        $data->save();

        Toastr::info(' Question Details Updated Successfully', 'Done', ["positionClass" => "toast-top-right"]);

        return redirect()->route('pre_ques_de.list');
    }

    public function delete($id){
        $data = QuestionDetails::findorfail($id);

        
        $file = $data->file;
        if(file_exists($file)){
            unlink(public_path('Public/PreQuesDe/QuestionFile').'/'.$data->file);
        }

        $solution_file = $data->solution_file;
        if(file_exists($solution_file)){
            unlink(public_path('Public/PreQuesDe/SolutionFile').'/'.$data->solution_file);
        }

        $data->delete();

        Toastr::error(' Question Details Deleted Successfully', 'Done', ["positionClass" => "toast-top-right"]);

        return redirect()->route('pre_ques_de.list');
    }
}
