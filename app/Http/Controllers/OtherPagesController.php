<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherPagesController extends Controller
{
    public function contactUs()
    {
        return view('user.contactUs');
    }

    public function estimation()
    {
        return view('user.estimatePlan');
    }
}
