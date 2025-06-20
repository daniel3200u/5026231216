<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class nilaiController extends Controller
{
    public function index(){
        $nilai=DB::table('nilai')->get();
        return view('nilai',['nilai'=>$nilai]);
    }
    public function tambah(){

        // memanggil view tambah
        return view('tambahnilai');

    }
    public function store(Request $request){
        // insert data ke table pegawai
        DB::table('nilai')->insert([
            'nomorinduksiswa' => $request->nomorinduksiswa,
            'nilaiangka' => $request->nilaiangka,
            'sks' => $request->sks
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/eas');
    }
}
