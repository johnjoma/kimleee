<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        return view('index');
    }

    public function contact(){

        return view('contact');
    }


    public function about(){

        return view('about');
    }

    public function gallery(){

        return view('gallery');
    }

    public function test(){

        return view('test');
    }
    public function hireme(){

        return view('hireme');
    }
}

