<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    //
    public function send(Request $request)
    {
        $e_mail = $request->e_mail;
        $objDemo = new \stdClass();
        $objDemo->sender = 'Ayazhan Zhaxykeldiyeva';
        $objDemo->receiver = 'Ayazhan Zhaxykeldiyeva';

        Mail::to($e_mail)->send(new SendMail($objDemo));
        return back()->with('success', 'Thanks for booking!');
    }
}
