<?php

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

Route::get('/home', function () {
    $barang = [
        [
           'name' => 'Red Recycle Bag',
           'image' => '../img/barang1.png',
           'price' => 'Rp700.000,00',
           'pricedisc' => 'Rp500.000,00',
           'discount' => 'Yes'
        ], 
        [
            'name' => 'Broadway Chair',
            'image' => '../img/barang2.png',
            'price' => 'Rp500.000,00',
            'discount' => 'No'
         ], 
         [
            'name' => ' Skate Board Chair',
            'image' => '../img/barang3.png',
            'price' => 'Rp300.000,00',
            'discount' => 'No'
         ], 
         [
            'name' => 'Mirror Toys',
            'image' => '../img/barang4.png',
            'price' => 'Rp900.000,00',
            'pricedisc' => 'Rp700.000,00',
            'discount' => 'Yes'
         ], 
         [
            'name' => 'Blue Kids Chair',
            'image' => '../img/barang5.png',
            'price' => 'Rp1.000.000,00',
            'discount' => 'No'
         ], 
         [
            'name' => 'Green Recycle Bag',
            'image' => '../img/barang6.png',
            'price' => 'Rp1.700.000,00',
            'pricedisc' => 'Rp1.000.000,00',
            'discount' => 'Yes'
         ]
        
     ];

    return view('home', compact('barang'));
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