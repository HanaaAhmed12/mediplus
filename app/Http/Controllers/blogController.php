<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
    public function blog(){
        $title = 'Mediplus Blog';
        return view('blog', compact('title'));
    }
}