<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMAil;
use App\Mail\PortfolioMail;
use Illuminate\Support\Facades\Mail;



class EmailController extends Controller
{
    //
    // public function txt_mail()
    // {
    //     $info = array(
    //         'name' => "Alex"
    //     );
    //     Mail::send(['text' => 'welcome'], $info, function ($message)
    //     {
    //         $message->to('eslam.muhammed.saeed@gmail.com', 'W3SCHOOLS')
    //                 ->subject('Basic test eMail from W3schools.');
    //         $message->from('eslam.muhammed.saeed@gmail.com', 'Alex');
    //     });
    //     echo "Successfully sent the email";
    // }

    // public function html_mail()
    // {
    //     $info = array(
    //         'name' => "Alex"
    //     );
    //     Mail::send('welcomemsg', $info, function ($message)
    //     {
    //         $message->to('eslam.muhammed.saeed@gmail.com', 'W3SCHOOLS')
    //                 ->subject('Basic test eMail from W3schools.');
    //         $message->from('eslam.muhammed.saeed@gmail.com', 'Alex');
    //     });
    //     echo "Successfully sent the email";
    // }

    // public function attached_mail()
    // {
    //     $info = array(
    //         'name' => "Alex"
    //     );
    //     Mail::send('emails.welcome', $info, function ($message)
    //     {
    //         $message->to('alex@example.com', 'w3schools')
    //             ->subject('Test eMail with an attachment from W3schools.');
    //         $message->attach('D:\laravel_main\laravel\public\uploads\pic.jpg');
    //         $message->attach('D:\laravel_main\laravel\public\uploads\message_mail.txt');
    //         $message->from('karlosray@gmail.com', 'Alex');
    //     });
    //     echo "Successfully sent the email";
    // }

    function getData(Request $req){
        

        Mail::to('eslam.muhammed.saeed@gmail.com')->send(new PortfolioMail($req->input("email"),$req->input("username"),$req->input("msg")));
        return view('pages.contact') ;
        // return $req->input("email");
        //return "form data will be here";
    }
}
