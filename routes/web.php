<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
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
// Route::get('/{locale}', function ($locale) {
//     if (!in_array($locale, ['en', 'ru'])) {
//         App::setLocale('en');
//     }

//     App::setLocale($locale);

//     return view('welcome');
// });
Route::resource('invoices', 'InvoicesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::POST('deletePost', 'InvoicesController@deletePost');
