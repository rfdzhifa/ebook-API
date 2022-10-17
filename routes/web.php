<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| 3contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('coba', function(){
    return 'Halo';
});

//array JSON
Route::get('coba1', function(){
    return ['Jipa', 'Jipi', 'Jipo'];
});

//array JSON
route::get('coba2', function(){
    return [
        'Nama' => 'Rifdah Inas Nazhifah',
        'NIS' => 3103120195,
        'Kelas' => 'XII RPL 6'
    ];
});

//array JSON
route::get('coba3', function(){
    return response()->json([
        'Nama' => 'Rifdah Inas Nazhifah',
        'NIS' => 3103120195,
        'Kelas' => 'XII RPL 6'
    ], 201);
});