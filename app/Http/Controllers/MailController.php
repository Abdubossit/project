<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MyMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    // public function send(){
    //     $obj = new \stdClass();
    //     Mail::to("190103326@stu.sdu.edu.kz")->send(new MyMail($obj));
    //     return "Sended";
    // }

    function index(){
        return view('contact');
    }
    function send(Request $request){
        $this->validate($request,[
            'name'        =>       'required',
            'email'       =>       'required|email',
            'message'     =>       'required',
        ]);

        $demo = array(
            'name'   => $request->name,
            'message'   => $request->message
        );
        Mail::to('190103326@stu.sdu.edu.kz')->send(new MyMail($demo));
        return back()->with('success', 'Thanks for contact us!');
    }
}
