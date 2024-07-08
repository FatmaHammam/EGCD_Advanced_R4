<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\ShippedMail;
use Illuminate\Http\Request;

class ShippedController extends Controller
{

    public function send_mail()
    {
        Mail::to('test@gmail.com')->send(new ShippedMail());
        return "Email Sent Succ";
    }
}
