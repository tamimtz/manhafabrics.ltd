<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function mail(Request $request) {

        if (isset($_POST["submit"])) {
            $username = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $message = $_POST["message"];
        
            $to = "tamimtzb@gmail.com";
            $subject = $message;
        
            $message = "Name: {$username} Email: {$email} Phone: {$phone}  Message: " . $message;
        
            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        
            // More headers
            $headers .= 'From: bravecoderofficial@gmail.com';
        
            $mail = mail($to,$subject,$message,$headers);
        }    
    }
}

