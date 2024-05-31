<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontpagesController extends Controller
{
    public function home(){
        $title = 'Mediplus FrontPages';

        return view('home', compact('title'));
    }
}