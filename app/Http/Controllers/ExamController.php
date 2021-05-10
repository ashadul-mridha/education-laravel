<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exam;
use Toastr;

class ExamController extends Controller
{
    public function create(){
        return view('backend.exam.create_exam');
    }

    public function store(Request $request){

        $request->validate([
            'exam_title' => 'required',
            'exam_start_date' => 'required',
            'exam_start_time' => 'required',
            'exam_end_time' => 'required',
            'exam_description' => 'required'
        ]);

        $exam = new Exam();

        $exam->exam_title = $request->exam_title;
        $exam->exam_start_date = $request->exam_start_date;
        $exam->exam_start_time = $request->exam_start_time;
        $exam->exam_end_time = $request->exam_end_time;
        $exam->exam_description = $request->exam_description;
        $exam->created_by = $request->created_by;
        $exam->save();


        Toastr::info('Exam Add Successful', 'Done', ["positionClass" => "toast-top-center"]);

        return redirect()->route('exam.list');
    }

    public function list(){
        $exams = Exam::all();
        return view('backend.exam.exam_list',compact('exams'));
    }

    public function view($id){
        $exam = Exam::findorfail($id);
        return view('backend.exam.show',compact('exam'));
    }

    public function edit($id){
        $exam = Exam::findorfail($id);
        return view('backend.exam.edit_exam',compact('exam'));
    }

    public function update(Request $request){
        $request->validate([
            'exam_title' => 'required',
            'exam_start_date' => 'required',
            'exam_start_time' => 'required',
            'exam_end_time' => 'required',
            'exam_description' => 'required'
        ]);

        $exam = Exam::findorfail($request->id);

        $exam->exam_title = $request->exam_title;
        $exam->exam_start_date = $request->exam_start_date;
        $exam->exam_start_time = $request->exam_start_time;
        $exam->exam_end_time = $request->exam_end_time;
        $exam->exam_description = $request->exam_description;
        $exam->updated_by = $request->updated_by;
        $exam->save();
        
        Toastr::info('Exam Update Successfully', 'Done', ["positionClass" => "toast-top-right"]);

        return redirect()->route('exam.list');
    }

    public function delete($id){
        $exam = Exam::findorfail($id);
        $exam->delete();

        Toastr::error('Exam Delete Successful', 'Done', ["positionClass" => "toast-top-center"]);

        return redirect()->route('exam.list');
    }
}
