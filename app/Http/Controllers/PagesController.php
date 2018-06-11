<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
    
        $name = 'saumya';
    return view('pages.about')->with('name',$name);
}

    public function contact(){
        return view('pages.contact');
    }
}