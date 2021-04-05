<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function about(){
        return view('pages.about');
    }
    public function work(){
        return view('pages.work');
    }
    public function contact(){
        return view('pages.contact');
    }
}
