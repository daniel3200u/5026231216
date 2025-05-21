<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Coba extends Controller
{
    //
    public function helloWorld(){
        return view('blog');
    }
    public function index(){
        $nama="Diki Alfarabi Hadi";
        $umur=20;
        $alamat="Surabaya";
        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
        return view('biodata',['nama'=>$nama,'umur'=>$umur,'alamat'=>$alamat,'pelajaran'=>$pelajaran]);
    }
}
