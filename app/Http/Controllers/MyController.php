<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function former()
    {
        return view('former');
    }
    public function about()
    {
        return view('about');
    }
    public function inscrire()
    {
        return view('tous');
    }
    public function tous()
    {
        return view('tous');
    }
    public function dev()
    {
        return view('dev');
    }
    public function infra()
    {
        return view('infra');
    }
    public function gestion()
    {
        return view('gestion');
    }
    public function equipe()
    {
        return view('equipe');
    }
    public function contact()
    {
        return view('contact');
    }
}
