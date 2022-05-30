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

Route::get('/','SiteController@home')->name('home');
Route::get('/about_page','SiteController@about');
Route::get('/contact_page','SiteController@contact');
Route::get('/login','SiteController@login')->name('login');
Route::get('/registration','SiteController@registration');
Route::get('/bookingList','SiteController@bookingList');
Route::get('/dashboard','SiteController@dashboard')->name('adminPanel');
Route::get('/car_booking','SiteController@carBook')->name('car_booking');
Route::post('/carBookCreate','SiteController@carBookCreate')->name('carBookCreate');
Route::post('/registration_user','DashboardController@createRegistration')->name('registration');
Route::post('/adminPanel','DashboardController@createLogin')->name('admin_dashboard');
Route::post('/create_car','DashboardController@createCar')->name('car_create');
Route::get('/car_list','DashboardController@car_list')->name('car_list');
Route::get('/car_book_list','DashboardController@car_book_list')->name('car_book_list');
Route::get('/addCar','DashboardController@addCar')->name('add_car');
Route::get('/car_delete/{id}','DashboardController@delete')->name('car_delete');
Route::get('/logout','SiteController@logout')->name('logout');
Route::get('/approval/{id}','DashboardController@approval')->name('approval');
Route::get('/cancel/{id}','DashboardController@cancel')->name('cancel');
Route::get('/admin_logout','DashboardController@admin_logout')->name('admin_logout');




