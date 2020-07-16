<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        $welcomeMsg = 'Welcome to the class of Full Stack Batch 2';
        return view('subview.test', compact('welcomeMsg'));
    }
}
