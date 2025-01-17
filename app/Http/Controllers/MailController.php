<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Welcomemail;
class MailController extends Controller
{
    //
    function sendMail(){
        $to="shivamsheokand32@gmail.com";
        $msg="dummy mail";
        $subject="dummy";
        Mail::to($to)->send(new Welcomemail($msg,$subject));
    }
}
