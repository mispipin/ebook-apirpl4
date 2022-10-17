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

Route::get('/', function () {
    return view('welcome');
});

Route::get('coba', function(){
    return "HALLO nama aku pipin";
});

// array json
Route::get('coba1', function(){
    return ['rapli', 'jeje', 'juju'];
});
//json object
Route::get('coba2', function(){
    return[
        'nama' => 'Kelvin Ferdinan',
        'kelas' => 'XII RPL 4',
        'NIS' => 1234567
    ];
});
//objek json ubah status code
Route::get('coba3', function(){
    return response()->json(
        [
            'nama' => 'Kelvin Ferdinan',
            'kelas' => 'XII RPL 4',
            'NIS' => 1234567
        ],201
    );
});