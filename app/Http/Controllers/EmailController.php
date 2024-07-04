<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendMail(Request $request)
    {
        $senderName = $request->input("senderName");
        $senderPhone = $request->input("senderPhone");
        $senderEmail = $request->input("senderEmail");
        $mailSubject = $request->input("mailSubject");
        $mailMessage = $request->input("mailMessage");
        $toEmail = "hackathon540@gmail.com";
        Mail::to($toEmail)->send(new WelcomeEmail($senderName, $senderPhone, $senderEmail, $mailSubject, $mailMessage));
        return redirect()->back()->with('success', 'Votre message a été envoyé. Merci !');
    }
}

