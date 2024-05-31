<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Service extends Controller
{
    public function service(){
        $title = 'Mediplus Service';
        return view('service', compact('title'));
    }
}