<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function confirm()
    {
        return view('confirm');
    }

    public function contact()
    {
        return view('contact');
    }

    public function thanks()
    {
        return view('thanks');
    }

    public function manege()
    {
        return view('manege');
    }
}
