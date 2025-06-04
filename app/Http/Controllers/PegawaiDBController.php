<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PegawaiDBController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$pegawai = DB::table('pegawai')->get();

    	// mengirim data pegawai ke view index
    	return view('index5',['pegawai' => $pegawai]);

    }
    public function tambah(){

        // memanggil view tambah
        return view('tambah');

    }
    public function store(Request $request){
        // insert data ke table pegawai
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }
}
