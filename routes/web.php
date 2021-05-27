<?php

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;




Route::get('/lab5', 'App\Http\Controllers\Vse@lab')->name('lab5');
//Route::post('/lab5', 'App\Http\Controllers\Vse@lab')->name('lab5');
Route::get('/lab5/search', 'App\Http\Controllers\Vse@Poisklab')->name('poisk');
Route::get('/lab5/delete', function () {
    $users = DB::delete('delete from users where id = ?', [$_GET['id']]);
    $users = User::all();
    return view('/lab', compact('users'));
})->name('labdelete');
Route::get('/lab5/add', function () {return view('/labuseraad');})->name('labadd');
Route::get('/app/buy', 'App\Http\Controllers\Vse@adduser')->name('labapp');



Route::get('/laba', 'App\Http\Controllers\Vse@labba')->name('lab');
Route::get('/aba/labasearch', 'App\Http\Controllers\Vse@searchlaba')->name('searchlaba');
Route::get('/laba/deletelaba', function () {
    $shops = DB::delete('delete from shops where id = ?', [$_GET['id']]);
    $shops = \App\Models\Shop::all();
    return view('/laba', compact('shops'));
})->name('labdeletee');



Route::get('/laba/hasmany', 'App\Http\Controllers\Vse@hasmanylab')->name('hasmanylab');
Route::get('/laba/belongtomane', 'App\Http\Controllers\Vse@belongtomanelab')->name('belongtomanelab');




