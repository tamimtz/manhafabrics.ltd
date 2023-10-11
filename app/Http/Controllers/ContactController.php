<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request){
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'msg' => $request->msg

        ];

        Mail::to('tamimtzb@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent', 'Your Message has been sent Successfully!');
    }
}
