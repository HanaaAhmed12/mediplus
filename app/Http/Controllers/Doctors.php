<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Doctors extends Controller
{
    public function doctor(){
        $title = 'Mediplus Doctors';
        return view('doctors', compact('title'));
    }
}