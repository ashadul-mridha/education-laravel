<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function get_index(){
        return view('backend.about_us.contact');
    }
    public function get_data(){
        return Contact::all();
    }
    public function store(Request $request){
        contact::CREATE($request->all());
        return ['success'=>true,'message'=>'Contact Insert'];
    }
    public function update(Request $request){
        $contact = Contact::find($request->id);

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;

        $contact->save();
        return ['success'=>true,'message'=>'Update Success'];
    }
    public function delete(Request $request){
        
        $contact = Contact::find($request->id);
        $contact->delete();
        return ['success'=>true,'message'=>'Delete Success'];
    }
}
