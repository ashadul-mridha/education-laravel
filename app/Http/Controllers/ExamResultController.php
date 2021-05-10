<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exam;
use App\User;
use App\ExamResult;
use Toastr;

class ExamResultController extends Controller
{
    public function create(){

        $all_exam = Exam::all();
        $all_user = User::all();
        return view('backend.exam_result.create',compact('all_exam','all_user'));
    }

    public function store(Request $request){

        $request->validate([
            'user_id' => 'required',
            'exam_id' => 'required',
            'mark' => 'required|numeric',
            'comment' => 'required',
        ]);

        $data = new ExamResult();

        $data->exam_id = $request->exam_id;
        $data->user_id = $request->user_id;
        $data->mark = $request->mark;
        $data->comment = $request->comment;
        $data->created_by = $request->created_by;
        $data->save();

        Toastr::info('Exam Result Added Successfully', 'Done', ["positionClass" => "toast-top-right"]);

        return redirect()->route('exam_result.list');
    }

    public function list(){
        $all_data = ExamResult::with('user','exam')->get();
        return view('backend.exam_result.list',compact('all_data'));
    }

    public function view($id){
        $data = ExamResult::with('exam','user')->findorfail($id);
        return view('backend.exam_result.view',compact('data'));
    }

    public function edit($id){

        $all_exam = Exam::all();
        $all_user = User::all();
        $data = ExamResult::findorfail($id);
        return view('backend.exam_result.edit',compact('all_exam','all_user','data'));
    }

    public function update(Request $request){

        $request->validate([
            'user_id' => 'required',
            'exam_id' => 'required',
            'mark' => 'required|numeric',
            'comment' => 'required',
        ]);

        $data = ExamResult::findorfail($request->id);

        $data->exam_id = $request->exam_id;
        $data->user_id = $request->user_id;
        $data->mark = $request->mark;
        $data->comment = $request->comment;
        $data->created_by = $request->created_by;
        $data->save();

        Toastr::info('Exam Result Updated Successfully', 'Done', ["positionClass" => "toast-top-right"]);

        return redirect()->route('exam_result.list');
    }

    public function delete($id){
        $data = ExamQuestion::findorfail($id);
        $data->delete();
        
        Toastr::error('Exam Result Deleted Successfully', 'Done', ["positionClass" => "toast-top-right"]);

        return redirect()->route('exam_result.list');
    }
}
