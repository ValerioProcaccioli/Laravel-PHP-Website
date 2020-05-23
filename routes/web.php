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

Route::get('/selTopCat/{topCatId}/selCat/{catId}', 'PublicController@showSubCategoryCatalog')
        ->name('catalog3');
//Rotta con scelta di categoria
Route::get('/selTopCat/{topCatId}', 'PublicController@showCategoryCatalog')
        ->name('catalog2');
//Rotta della home
Route::get('/', 'PublicController@showAllCatalog')
        ->name('catalog1');

Route::get('/product/{prodId}', 'PublicController@showProduct')
        ->name('product');

Route::view('/where', 'where')
        ->name('where');

Route::view('/who', 'who')
        ->name('who');

Route::view('/contact', 'contact')
        ->name('contact');

Route::get('/user', 'UserController@index')
        ->name('user')->middleware('can:isUser');

Route::get('/staff', 'StaffController@index')
        ->name('staff')->middleware('can:isStaff');

Route::get('/staff/insert', 'StaffController@retInsert')
        ->name('insert');

Route::get('/staff/newCat', 'StaffController@newCat')
        ->name('addCategory');

Route::post('/staff/insert', 'StaffController@upProd')
        ->name('upProd');

Route::post('/staff/newCat', 'StaffController@upCat')
        ->name('upCategory');


Route::get('/admin', 'AdController@index')
        ->name('admin')->middleware('can:isAdmin');;


// ROTTE PER AUTENTICAZIONE GET PER PRESETARE LE FORM POST PER ACQUISIRE I DATI
Route::get('login', 'Auth\LoginController@showLoginForm')
        ->name('show_login');

Route::post('login', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@logout')
        ->name('logout');

Route::get('register', 'Auth\RegisterController@showRegistrationForm')
        ->name('show_register');

Route::post('register', 'Auth\RegisterController@register');

