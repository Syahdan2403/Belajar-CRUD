<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function halaman1()
    {
        return view('Halaman1');
    }

    public function halaman2()
    {
        return view('Halaman2');
    }

}
