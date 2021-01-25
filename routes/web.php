<?php

use App\Series;
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

Auth::routes();

// Frontend Route

Route::get('/', function () {
	$featuredSeries=Series::take(3)->latest()->get();
    return view('frontend.front',compact('featuredSeries'));
});


Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/series', 'Frontend\SeriesController');
Route::get('/series/{series}/episodes/{episodeNumber}', 'Frontend\SeriesController@episodes')->name('series.episode');



// Backend Route

Route::group(['prefix'=>'admin', 'as'=>'admin.'], function () {

	Route::get('/', 'Backend\Dashboard\DashboardController@index')->name('index');
	Route::resource('/series', 'Backend\Series\SeriesController');
	
});

