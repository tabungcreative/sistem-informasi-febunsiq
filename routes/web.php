<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PengumumanController;
use App\Models\Pengumuman;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// route index
Route::get('/', function () {
    return view('pages.index');
});

Route::get('/berita', function () {
    return view('pages.berita');
});
Route::get('/pengumuman', function () {
    return view('pages.pengumuman');
});

/*Route Program Studi */
// route manajemen
Route::get('/manajemen', function () {
    return view('pages.manajemen');
});
// route akuntansi
Route::get('/akuntansi', function () {
    return view('pages.akuntansi');
});
// route perbankan syariah
Route::get('/perbankan-syariah', function () {
    return view('pages.perbankan_syariah');
});
/* Akhir Route program studi */



/*Route layanan */
Route::get('/pelayanan-mahasiswa',function(){
    return view('pages.pelayanan_mahasiswa');
});
Route::get('/pembayaran-mahasiswa',function(){
    return view('pages.pembayaran_mahasiswa');
});
Route::get('/pembayaran-mata-kuliah-mengulang',function(){
    return view('pages.pembayaran_makul_mengulang');
});
Route::get('/konfirmasi-pembayaran-mata-kuliah-mengulang',function(){
    return view('pages.konfirmasi_pembayaran');
});

/*Akhir Route layanan */

/*Route Profil */ 
Route::get('/sejarah-feb',function(){
    return view('pages.sejarah_feb');
});
Route::get('/visi-misi-feb',function(){
    return view('pages.visi_misi');
});
Route::get('/struktur-organisasi',function(){
    return view('pages.struktur_organisasi');
});

/*Akhir route Profil */ 

Route::get('/dashboard',function(){
    return view('dashboard.index');
});

Route::resource('dashboard/pengumuman', PengumumanController::class);
Route::resource('dashboard/berita', BeritaController::class);
