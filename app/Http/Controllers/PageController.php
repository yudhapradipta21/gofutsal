<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //Show Page Beranda
    public function index(){
        return view('pages.beranda');
    }

    //Show Page Beranda
    public function bantuan(){
        return view('pages.bantuan');
    }

    //Show Page Beranda
    public function tentang(){
        return view('pages.tentang');
    }
}
