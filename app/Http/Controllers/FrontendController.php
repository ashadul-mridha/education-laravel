<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exam;
use App\ExamResult;
use App\Subscription;

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

    public function all_exam_result($id){

        $exam_result = ExamResult::with('user','exam')
                                ->where('exam_id', '=', $id)
                                ->orderBy('mark','DESC')
                                ->get();
        
        $exam = Exam::findorfail($id);   

        $top_mark = ExamResult::where('exam_id', '=', $id)
                                ->get()
                                ->max('mark');  

        $min_mark = ExamResult::where('exam_id', '=', $id)
                                ->get()
                                ->min('mark');  
                                
                                // dd($exam_result);                   
        
        return view( 'frontend.single_exam_result' ,compact('exam_result','exam','top_mark','min_mark'));
    }

    public function free_tutorials(){

        // $data = Subscription::all();
        // dd($data);
        return view('frontend.free_tutorial');
    }

    public function subscription_package(){

        $data = Subscription::orderBy('id','DESC')->get()->take(3);
        return view('frontend.subscription_pac',compact('data'));
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function subscription(){
        return view('frontend.subscription');
    }

    public function full_tutorials(){
        return view('frontend.full_tutorial');
    }

    public function result(){
        return view('frontend.result');
    }

    public function exam(){
        return view('frontend.exam');
    }
}
