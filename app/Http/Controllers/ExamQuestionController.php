<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExamQuestion;
use App\Exam;
use Toastr;

class ExamQuestionController extends Controller
{
    public function create(){

        $all_exam = Exam::all();
        return view('backend.exam_question.create',compact('all_exam'));
    }

    public function store(Request $request){

        

        $request->validate([
            'question_title' => 'required',
            'question_option_1' => 'required',
            'question_option_2' => 'required',
            'question_option_3' => 'required',
            'question_option_4' => 'required',
            'right_answare' => 'required',
            'exam_count_time' => 'required',
            'exam_id' => 'required'
        ]);

        $data = new ExamQuestion();

        $data->exam_id = $request->exam_id;
        $data->question_title = $request->question_title;
        $data->question_option_1 = $request->question_option_1;
        $data->question_option_2 = $request->question_option_2;
        $data->question_option_3 = $request->question_option_3;
        $data->question_option_4 = $request->question_option_4;
        $data->right_answare = $request->right_answare;
        $data->exam_count_time = $request->exam_count_time;
        $data->created_by = $request->created_by;
        $data->save();

        Toastr::info('Exam Question Added Successfully', 'Done', ["positionClass" => "toast-top-right"]);

        return redirect()->route('exam_questions.list');
    }

    public function list(){
        $all_data = ExamQuestion::all();
        return view('backend.exam_question.list',compact('all_data'));
    }

    public function view($id){
        $data = ExamQuestion::findorfail($id);
        return view('backend.exam_question.view',compact('data'));
    }

    public function edit($id){

        $all_exam = Exam::all();
        $data = ExamQuestion::findorfail($id);
        return view('backend.exam_question.edit',compact('data','all_exam'));
    }

    public function update(Request $request){

        $request->validate([
            'question_title' => 'required',
            'question_option_1' => 'required',
            'question_option_2' => 'required',
            'question_option_3' => 'required',
            'question_option_4' => 'required',
            'right_answare' => 'required',
            'exam_count_time' => 'required',
            'exam_id' => 'required'
        ]);

        $data = ExamQuestion::findorfail($request->id);

        $data->exam_id = $request->exam_id;
        $data->question_title = $request->question_title;
        $data->question_option_1 = $request->question_option_1;
        $data->question_option_2 = $request->question_option_2;
        $data->question_option_3 = $request->question_option_3;
        $data->question_option_4 = $request->question_option_4;
        $data->right_answare = $request->right_answare;
        $data->exam_count_time = $request->exam_count_time;
        $data->updated_by = $request->updated_by;
        $data->save();

        Toastr::info('Exam Question Update Successfully', 'Done', ["positionClass" => "toast-top-right"]);

        return redirect()->route('exam_questions.list');
    }

    public function delete($id){
        $data = ExamQuestion::findorfail($id);
        $data->delete();

        Toastr::error('Exam Question Deleted Successfully', 'Done', ["positionClass" => "toast-top-right"]);

        return redirect()->route('exam_questions.list');
    }
}
