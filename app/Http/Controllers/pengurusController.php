<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengurusController extends Controller
{
    public function index(){
        return view('pengurus.index');
    }
}
