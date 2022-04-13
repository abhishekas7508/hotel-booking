<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Fascades\Mail;
class MailController extends Controller
{
    function sendmail(Request $req){
        $to_name='Abhishek';
        $to_email='abhishekas7508@gmail.com';
        $data=array('name'=>'hello','body'=>'asdf');
        Mail::send('mail',$data,function($message) use($to_name,$to_email){
            $message->to($to_email)
            ->subject('web testing mail');
        });
        echo "mail sent";
        // $details=[
        //     'title'=>'Mail from Surfside Media',
        //     'body'=> 'This is for testing purpose'
        // ];
        // Mail::to("abhishekas7508@gmail.com")->send(new TestMail($details));
        // return "mail sent";
    }
}
