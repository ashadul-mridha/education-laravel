<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exam;
use App\ExamResult;
use App\Subscription;
use App\Topicstype;
use App\ExamQuestion;
use App\ExamQuestionAnsware;
use Auth;
use Toastr;
use DB;
use Carbon\Carbon;

class FrontendController extends Controller
{

    public function home(){
        return view('frontend.home');
    }

    public function login_form(){
        return view('auth.login');
    }


    public function exam_result(){
        $exam = Exam::orderBy('exam_start_date','DESC')->get();
        return view('frontend.exam_result',compact('exam'));
    }

    public function all_exam_result($slug){

        $exam_result = ExamResult::where('exam_slug', '=', $slug)
                                ->orderBy('mark','DESC')
                                ->get();
        
        $exam = Exam::where('slug', '=', $slug)->first();   

        $top_mark = ExamResult::where('exam_slug', '=', $slug)
                                ->get()
                                ->max('mark');  

        $min_mark = ExamResult::where('exam_slug', '=', $slug)
                                ->get()
                                ->min('mark');                   
        
        return view( 'frontend.single_exam_result' ,compact('exam_result','exam','top_mark','min_mark'));
    }

    public function subscription_package(){

        $data = Subscription::where('active','=','active')->orderBy('id','DESC')->get();
        return view('frontend.subscription_pac',compact('data'));
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function subscription(){
        return view('frontend.subscription');
    }


    public function result(){

        $exam_result = ExamResult::with('exam')
                                ->where('user_id', '=', Auth::id() )
                                ->orderBy('created_by','DESC')
                                ->get();

        return view('frontend.result',compact('exam_result'));
    }

    public function exam(){

        $exam = Exam::all();
        return view('frontend.exam',compact('exam'));
    }

    public function start_exam($exam_id ){

        $exam_ques = ExamQuestion::where('exam_id','=',$exam_id)->orderBy('id','ASC')->first();
        $exam = Exam::findorfail($exam_id);
        $exam_name = $exam->exam_title;


        if ($exam_ques != null) {
            return view('frontend.exam_ques',compact('exam_ques','exam_name'));
        }else{
            Toastr::error('Exam Question Not Added', 'Wait', ["positionClass" => "toast-top-right"]);
            return back();
        }

    }



    public function next_exam_ques(Request $request ){

    
        $id = $request->id;
        $exam_id = $request->exam_id;
        $right_ans = $request->right_answare;

        // $question_answare = ExamQuestion::findorfail($id);
        // $right_ans = $question_answare->right_answare;

        if ($right_ans == $request->answare) {

            DB::table('exam_question_answare')->insert([
                'user_id'       => Auth::id(),
                'question_id'   => $id,
                'answare_mark'   => 1,
                'exam_id'       => $exam_id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }else{
            DB::table('exam_question_answare')->insert([
                'user_id'       => Auth::id(),
                'question_id'   => $id,
                'answare_mark'  => 0,
                'exam_id'       => $exam_id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }




        $exam_ques = ExamQuestion::where('exam_id','=',$exam_id)
                                ->where('id','>',$id)
                                ->orderBy('id','ASC')
                                ->first();

        if ($exam_ques != null) {

                
            $exam = Exam::findorfail($exam_id);
            $exam_name = $exam->exam_title;
            return view('frontend.exam_ques',compact('exam_ques','exam_name'));

        }else{

            $result = ExamQuestionAnsware::where('user_id','=',Auth::id())
                                        ->where('exam_id','=',$exam_id)
                                        ->where('created_at', '>',Carbon::now()->subHours(3)->toDateTimeString())
                                        ->get()
                                        ->sum('answare_mark');

        
            $right = ExamQuestionAnsware::where('user_id','=',Auth::id())
                                        ->where('exam_id','=',$exam_id)
                                        ->where('answare_mark','=',1)
                                        ->where('created_at', '>',Carbon::now()->subHours(3)->toDateTimeString())
                                        ->get()
                                        ->sum('answare_mark');

            

            $wrong = ExamQuestionAnsware::where('user_id','=',Auth::id())
                                        ->where('exam_id','=',$exam_id)
                                        ->where('answare_mark','=',0)
                                        ->where('created_at', '>',Carbon::now()->subHours(3)->toDateTimeString())
                                        ->get();

            $wrong_ans = count($wrong);
            
            return view('frontend.exam_ques_result',compact('result','right','wrong_ans'));
        }

    }
    public function start_exam_result(){

        return view('frontend.exam_ques_result');
    }
}
