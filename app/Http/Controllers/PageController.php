<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function beranda()
    {
        return view('beranda');
    }

    public function tentang()
    {
        return view('tentang');
    }

    public function contact()
    {
        return view('contact');
    }
}
