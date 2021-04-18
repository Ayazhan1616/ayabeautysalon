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
        /*$e_mail = $request->e_mail;
        $objDemo = new \stdClass();
        $objDemo->sender = 'Ayazhan Zhaxykeldiyeva';
        $objDemo->receiver = 'Ayazhan Zhaxykeldiyeva';

        Mail::to($e_mail)->send(new SendMail($objDemo));*/
        $data = array(
            'name' => $request->name,
             'e_mail'=>$request->e_mail
        );
    
        Mail::send('demo', $data, function ($message) use($request) {
    
            $message->to($request->e_mail,$request->name);
    
            $message->from('zhaksykeldievaayazhan@gmail.com')->subject('Beauty salon');
    
        });
        return back()->with('success', 'Check your e-mail!');
    }
}
