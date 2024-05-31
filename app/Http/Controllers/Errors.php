<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Errors extends Controller
{
    public function error(){
        $title = 'Mediplus Errors';
        return view('error', compact('title'));
    }
}
