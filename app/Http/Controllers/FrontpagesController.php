<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPagesController extends Controller
{
    public function home(){
        $title = 'Mediplus FrontPages';

        return view('home', compact('title'));
    }
}