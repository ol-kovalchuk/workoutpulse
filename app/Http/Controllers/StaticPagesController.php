<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function index()
    {
        return view('static-pages.home');
    }

    public function about()
    {
        return view('static-pages.about');
    }

    public function contacts()
    {
        return view('static-pages.contacts');
    }
}
