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

// Example Routes
Route::view('/', 'aternix');
Route::match(['get', 'post'], '/dashboard', function () {
    return view('dashboard');
});
Route::view('/laravel', 'laravel');

//Individual Pages
Route::view('/pages/slick', 'pages.slick');
Route::view('/pages/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');

//For Frontend Pages
Route::view('/about', 'pages/about');
Route::view('/game-studio', 'pages/game-studio');
Route::view('/software', 'pages/software');
Route::view('/websites', 'pages/websites');
Route::view('/mc-server', 'pages/mc-server');
Route::view('/news', 'pages/news');
Route::view('/forum', 'pages/forum');
Route::view('/enquiry', 'pages/enquiry');

//For Legal
Route::view('/privacy-policy', 'pages/privacy-policy');
Route::view('/terms-and-conditions', 'pages/terms-and-conditions');
Route::view('/website-service-contract', 'pages/website-service-contract');

//For Individual Projects
Route::view('/game-studio/war-in-space-arcade', 'pages/game-studio/war-in-space-arcade');
Route::view('/game-studio/carbonfield', 'pages/game-studio/carbonfield');

//For Thicc Server
Route::view('/map', 'map');
