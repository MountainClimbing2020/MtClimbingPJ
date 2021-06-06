<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;

class ContactController extends Controller
{
    public function index(){
    return view('contact.index');
    }
    public function sendMail(Request $request)
    {
        $data= $request->all();
        Mail::send(['text' =>'contact.temp'], $data, function($message) use($data){
            $message->to($data["email"])->subject($data["title"]);
        });
        return view('contact.complete');
    }
}
