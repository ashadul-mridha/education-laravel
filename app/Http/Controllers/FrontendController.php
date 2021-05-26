<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exam;
use App\ExamResult;
use App\Subscription;
use App\Topicstype;

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
