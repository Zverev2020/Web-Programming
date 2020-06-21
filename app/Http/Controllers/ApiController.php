<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function indexAction()
    {
        return view('index');
    }
    public function contactAction()
    {
        return view('contact');
    }
    public function sectionAction()
    {
    return view('section');
    }
}
