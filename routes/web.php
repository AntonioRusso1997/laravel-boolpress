<?php

use Illuminate\Support\Facades\Route;
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
// Rotta che gestisce la homepage visible agli utenti
Route::get('/', 'HomeController@index')->name('index');

//Rotta per guest
Route::resource('/posts', 'PostController');
Route::resource('/categories', 'CategoryController');
Route::resource('/tags', 'TagController');

//Rotte per le mails
Route::get('/contact', 'HomeController@contact')->name('contacts');
Route::post('/contact', 'HomeController@handleContactForm')->name('contacts.send');
Route::get('/thank-you', 'HomeController@thankYou')->name('contacts.thank-you');


//Serie di rotte che gestisce tutto il meccanismo di autenticazione
Auth::routes();

//Serie di rotte che gestiscono il backoffice (parte amministrativa)
// Route::get('/admin', 'HomeController@index')->name('admin');

Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')
    ->group(function() {
        //Pagina di atterragio dopo il login (con il prefix, l'url è /admin)
        Route::get('/','HomeController@index')->name('index');

        Route::resource('/posts', 'PostController');
        Route::resource('/categories', 'CategoryController');
        Route::resource('/tags', 'TagController');
    });
