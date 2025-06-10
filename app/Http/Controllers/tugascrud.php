<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tugascrud extends Controller
{
    public function index()
    {
    	$bolpen=DB::table('bolpen')->paginate(10);
        return view('index6',['bolpen'=>$bolpen]);
    }
    public function tambah(){

        // memanggil view tambah
        return view('tambahcrud');

    }
    public function store(Request $request){
        // insert data ke table pegawai
        DB::table('bolpen')->insert([
            'merkbolpen' => $request->merkbolpen,
            'hargabolpen' => $request->hargabolpen,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/CROT');
    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$bolpen = DB::table('bolpen')->where('merkbolpen','like',"%".$cari."%")->paginate();

    		// mengirim data pegawai ke view index
		return view('index6',['bolpen' =>$bolpen]);

	}
    public function update(Request $request){
	// update data pegawai
        DB::table('bolpen')->where('ID',$request->ID)->update([
            'merkbolpen' => $request->merkbolpen,
            'hargabolpen' => $request->hargabolpen,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/CROT');
    }
    public function edit($id){
        // mengambil data pegawai berdasarkan id yang dipilih
        $bolpen = DB::table('bolpen')->where('ID',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('edit2',['bolpen' => $bolpen]);
    }

    public function proses(Request $request)
    {
        $this->validate($request,[
           'nama' => 'required|min:5|max:20',
           'pekerjaan' => 'required',
           'usia' => 'required|numeric'
        ]);

        return view('proses',['data' => $request]);
    }

    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('bolpen')->where('ID',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/CROT');
    }
}
