<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('home');
    }
    public function donate() {
        return view('donate');
    }
    public function getinvolved() {
        return view('getinvolved');
    }
    public function gallery() {
        return view('gallery');
    }
    public function events() {
        return view('events');
    }
    public function about() {
        return view('about');
    }
}
