<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscription;
use Toastr;

class SubscriptionController extends Controller
{
    public function create(){

       
        return view('backend.subscription.create');
    }

    public function store(Request $request){
        
        $request->validate([
            'subscription_details' => 'required',
            'price' => 'required',
            'active' => 'required'
        ]);

        $data = new Subscription();

        $data->subscription_details = $request->subscription_details;
        $data->price = $request->price;
        $data->discount_price = $request->discount;
        $data->active = $request->active;
        $data->created_by = $request->created_by;
        $data->save();

        Toastr::info(' Subscription Added Successfully', 'Done', ["positionClass" => "toast-top-right"]);

        return redirect()->route('subscription.list');
    }

    public function list(){
        $all_data = Subscription::all();
        return view('backend.subscription.list',compact('all_data'));
    }

    public function view($id){
        $data = Subscription::findorfail($id);
        return view('backend.subscription.view',compact('data'));
    }

    public function edit($id){

        $data = Subscription::findorfail($id);
        return view('backend.subscription.edit',compact('data'));
    }

    public function update(Request $request){

        $request->validate([
            'subscription_details' => 'required',
            'price' => 'required',
            'active' => 'required'
        ]);

        $data = Subscription::findorfail($request->id);

        $data->subscription_details = $request->subscription_details;
        $data->price = $request->price;
        $data->discount_price = $request->discount;
        $data->active = $request->active;
        $data->created_by = $request->created_by;
        $data->save();
        Toastr::info(' Subscription Updated Successfully', 'Done', ["positionClass" => "toast-top-right"]);

        return redirect()->route('subscription.list');
    }

    public function delete($id){
        $data = Subscription::findorfail($id);
        $data->delete();
        Toastr::error(' Subscription Deleted Successfully', 'Done', ["positionClass" => "toast-top-right"]);

        return redirect()->route('subscription.list');
    }
    
}
