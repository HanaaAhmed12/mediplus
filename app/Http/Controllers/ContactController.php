<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        $title = 'Mediplus Contact';
        return view('contact', compact('title'));
    }
}