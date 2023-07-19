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
    $headerNav = config('db.headerNav');
    $comics = config('db.comics');
    $footerNav = config('db.footerNav');
    $socialMedias = config('db.socialMedias');
    $mainNav = config('db.mainNav');
    return view('welcome', compact('headerNav', 'comics', 'footerNav', 'socialMedias','mainNav'));
});
