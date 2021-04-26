<?php

namespace App\Http\Controllers;

use App\Mail\Akun_Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class Email_ConfirmControler extends Controller
{
    public function email_confrim(Request $request){
        Mail::to("kiki.nagh.arwolves@gmail.com")->send(new Akun_Mail());
		return "Email telah dikirim";
    }
}
