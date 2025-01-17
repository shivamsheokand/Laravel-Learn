<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Welcomemail;
class MailController extends Controller
{
    //
    function sendMail(Request $req){
        $to=$req->email;
        $msg=$req->message;
        $subject=$req->subject;
        Mail::to($to)->send(new Welcomemail($msg,$subject));
        return view('mailform');
    }
}
