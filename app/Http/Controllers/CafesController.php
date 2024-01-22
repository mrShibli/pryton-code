<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CafesController extends Controller
{
    public function cafes(){
        return view("pages.cafes");
    }
    public function creators(){
        return view("pages.creators");
    }
    public function Musicians () {
        return view("pages.Musicians");
    }
    public function Artists () {
        return view("pages.Artists");
    }
   
    public function Game () {
        return view('pages.Game');
    }
}
