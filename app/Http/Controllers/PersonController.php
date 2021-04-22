<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MyMail;
use Illuminate\Support\Facades\Mail;

use App\Models\Person;

class PersonController extends Controller
{
   public function index(){
      return view('project');
   }
   public function store(Request $request){
       $person = new Person();
       $person->name = $request->input('name');
       $person->email = $request->input('email');
       if($request->hasfile('image')){
           $file = $request->file('image');
           $extension = $file->getClientOriginalExtension();
           $filename = time() . '.' . $extension;
           $file->move('uploads/project/',$filename);
           $person->image = $filename;
       }else{
           return $request;
           $person->image = '';
       }
       $person->save();

       return view('project')->with('project',$person);

   } 
}
