<?php
//equals with import java.blablabal
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\tugascrud;
use App\Http\Controllers\karyawan;
use App\Http\Controllers\TrafficController;
use App\Http\Controllers\KeranjangBelanjaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//equals with system.out.println()
Route::get('/', function () {
    return view('welcome');
});
Route::get('/selamat',function(){
    return view('notifications::email');
});
Route::get('/halo',function(){
    return "<h1>hai</h1>";
});
Route::get('blog', function () {
	return view('blog');
});
Route::get('hello',[Coba::class,"helloWorld"]);
Route::get('/linktree', function(){
    return view('linktree');
})->name('linktree');
Route::get('/pertemuan1', function(){
    return view('pertemuan1');
})->name('pertemuan1');

Route::get('/bootstrap', function(){
    return view('bootstrap');
})->name('bootstrap');
Route::get('/bootstrap1', function(){
    return view('bootstrap1');
})->name('bootstrap1');
Route::get('/latihanlayout', function(){
    return view('index');
})->name('latihanlayout');
Route::get('/Dom', function(){
    return view('javas');
})->name('Dom');
Route::get('/makeover',function(){
    return view('danantara');
})->name('makeover');
Route::get('/topikcss',function(){
    return view('topikcss');
})->name('topikcss');
Route::get('/js2',function(){
    return view('js2');
})->name('js2');
Route::get('/link',function(){
    return view('link');
})->name('link');
Route::get('dosen', [Coba::class, 'index']);
Route::get('/frontend',function(){
    return view('navigator');
});

//Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog',[BlogController::class,'home']);
Route::get('/blog/tentang',[BlogController::class,'tentang']);
Route::get('/blog/kontak',[BlogController::class,'kontak']);

Route::get('/pegawai',[PegawaiDBController::class,'index']);
Route::get('/pegawai/tambah',[PegawaiDBController::class,'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store'])->name('pegawai.store');
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class,'edit']);
Route::post('/pegawai/{id}', [PegawaiDBController::class, 'update'])->name('pegawai.update');
Route::get('/pegawai/hapus/{id}',[PegawaiDBController::class,'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);
Route::post('/pegawai/proses', [PegawaiDBController::class, 'proses']);

Route::get('/CROT',[tugascrud::class,'index']);
Route::get('/CROT/tambah',[tugascrud::class,'tambah']);
Route::post('/CROT/store', [tugascrud::class, 'store'])->name('bolpen.store');
Route::get('/CROT/cari', [tugascrud::class, 'cari']);
Route::get('/CROT/edit/{id}',[tugascrud::class,'edit']);
Route::post('/CROT/{id}', [tugascrud::class, 'update'])->name('bolpen.update');
Route::get('/CROT/hapus/{id}',[tugascrud::class,'hapus']);

Route::get('/index',[karyawan::class,'index']);
Route::get('/index/tambah',[karyawan::class,'tambah']);
Route::post('/index/store', [karyawan::class, 'store'])->name('karyawan.store');
Route::get('/index/cari', [karyawan::class, 'cari']);
Route::get('/index/edit/{id}',[karyawan::class,'edit']);
Route::post('/index/{id}', [karyawan::class, 'update'])->name('karyawan.update');
Route::get('/index/hapus/{id}',[karyawan::class,'hapus']);

Route::get('/latihan2', [TrafficController::class, 'index']);

Route::get('/keranjangbelanja', [KeranjangBelanjaController::class, 'indexkeranjangbelanja']);
Route::get('/keranjangbelanja/belikeranjangbelanja/{id}', [KeranjangBelanjaController::class, 'belikeranjangbelanja']);
Route::get('/keranjangbelanja/batalkeranjangbelanja/{id}', [KeranjangBelanjaController::class, 'batalkeranjangbelanja']);
Route::post('/keranjangbelanja/storekeranjangbelanja', [KeranjangBelanjaController::class, 'storekeranjangbelanja']);
Route::post('/keranjangbelanja/updatekeranjangbelanja', [KeranjangBelanjaController::class, 'updatekeranjangbelanja']);
