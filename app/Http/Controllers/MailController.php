<?php

namespace App\Http\Controllers;

use App\Mail\TesztEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Mail from your_email.com',
            'body' => 'This is for testing email using smtp.'
        ];

        Mail::to('owl.doktor2001@gmail.com')
            ->send(new TesztEmail($mailData));

        dd("Email is sent successfully.");
    }
}
