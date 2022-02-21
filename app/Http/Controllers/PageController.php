<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }
    public function about(){
        return "Nim : 2041720039, Nama : Yoby Ryaian Pratama, Kelas : TI 2H";
    }
    public function articles($id){
        return "Halaman Artikel dengan ID ".$id;
    }
}
