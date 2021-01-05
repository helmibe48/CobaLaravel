<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function kategori()
    {
        return view('kategori');
    }

    public function faq()
    {
        return view('faq');
    }
}
