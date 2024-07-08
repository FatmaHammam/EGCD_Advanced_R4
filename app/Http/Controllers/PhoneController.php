<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function phone()
    {
        $user = Phone::find(1)->user;
        echo $user->name;
    }
}
