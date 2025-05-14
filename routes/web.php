<?php
//equals with import java.blablabal
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
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
