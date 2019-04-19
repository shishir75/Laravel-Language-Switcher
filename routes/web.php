<?php

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

use Illuminate\Support\Facades\Session;

Route::get('/welcome', function () {
    return view('welcome');
});




Route::get('{lang}/welcome', function ($lang) {
    /**
     * whenever you change locale
     * by passing language ISO code (like en, pl, pt-BR etc.)
     * add/update passed language to a session value with key 'locale'
     */
    Session::put('locale', $lang);

    /**
     * and now return back to a page
     * on which you changed language
     */
    return back();
})->name('langroute'); //this is route name - for ease of using it anywhere




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
