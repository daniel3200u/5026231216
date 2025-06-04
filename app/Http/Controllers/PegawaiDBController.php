<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PegawaiDBController extends Controller
{
    public function index()
    {
    	$pegawai=DB::table('pegawai')->paginate(10);
        return view('index5',['pegawai'=>$pegawai]);

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
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('pegawai')->where('pegawai_nama','like',"%".$cari."%")->paginate();

    		// mengirim data pegawai ke view index
		return view('index5',['pegawai' =>$pegawai]);

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
}
