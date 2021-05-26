<?php

namespace App\Http\Controllers;

use App\Topicstype;
use App\Topices;
use App\TopicesDetails;
use Toastr;

use Illuminate\Http\Request;

class FrontendtutorialController extends Controller
{
    

    public function free_tutorials(){

        $data = Topicstype::all();
        return view('frontend.tutorials.free_tutorial',compact('data'));
    }

    public function tutorials_title($slug){

        $all_title = Topices::where('topices_type', '=' , $slug)->get();
        $all_topices = Topicstype::all();
        $topice_type = Topicstype::where('topics_slug', '=' , $slug)->first();
        // dd($slug);
        return view('frontend.tutorials.tutorials_title',compact('all_title','topice_type','all_topices'));

    }

    public function tutorials_details($slug){
        
        $data = TopicesDetails::where('topices_id', '=' , $slug)->first();
        if (isset($data)) {
            
            $all_title = Topices::where('topices_type', '=' , $data->topices_slug)->get();
            $all_topices = Topicstype::all();
            $topice_type = Topicstype::where('topics_slug', '=' , $data->topices_slug)->first();

            
            return view('frontend.tutorials.topices_desc',compact('data','all_title','topice_type','all_topices'));
        }

        Toastr::error('Descriptiontion Not Added', 'Sorry', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
