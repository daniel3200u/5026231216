<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class karyawan extends Controller
{
    public function index()
    {
    	$karyawan=DB::table('karyawan')->paginate(10);
        return view('index7',['karyawan'=>$karyawan]);
    }
    public function tambah(){

        // memanggil view tambah
        return view('tambahkaryawan');

    }
    public function store(Request $request){
        // insert data ke table pegawai
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/index');
    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$karyawan = DB::table('karyawan')->where('kodepegawai','like',"%".$cari."%")->paginate();

    		// mengirim data pegawai ke view index
		return view('index7',['karyawan' =>$karyawan]);

	}
    public function update(Request $request){
	// update data pegawai
        DB::table('karyawan')->where('kodepegawai',$request->kodepegawai)->update([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/index');
    }
    public function edit($kodepegawai){
        // mengambil data pegawai berdasarkan id yang dipilih
        $karyawan = DB::table('karyawan')->where('kodepegawai',$kodepegawai)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('edit3',['karyawan' => $karyawan]);
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
        DB::table('karyawan')->where('kodepegawai',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/index');
    }
}
