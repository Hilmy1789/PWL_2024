<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }
    public function about(){
        return '2241760089|Hilmy Zaky Mustakim';
    }
    public function articles($getId){
        return 'Halaman Artikel dengan Id-'.$getId;
    }
}
