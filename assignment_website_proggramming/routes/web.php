<?php

use Illuminate\Support\Facades\Route;
use App\Models\Barang;
// use App\Http\Controllers\BarangController;

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

// Route::get('/home', [Barang::class, 'index']);
Route::get('/home', function(){
    return view('/home', [
         "title" => "Home",
        "barang" => Barang::all()
    ]);
});

Route::get('/regis', function () {
    return view('regis', [
        'status' => 'regis'
    ]);
});

Route::get('/login', function () {
    return view('login', [
        'status' => 'login'
    ]);
});