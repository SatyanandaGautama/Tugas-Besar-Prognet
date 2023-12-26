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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/room', 'RoomController@index')->name('room');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/news', 'NewsController@index')->name('news');
Route::get('/contact', 'ContactController@index')->name('contact');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/slider', 'SliderController@index')->name('slider');
Route::get('/slider/insert', 'SliderController@insert')->name('slider.insert');
Route::post('/slider', 'SliderController@store')->name('slider.store');
Route::get('/slider/{id}/edit', 'SliderController@edit')->name('slider.edit');
Route::put('/slider/{id}', 'SliderController@update')->name('slider.update');
Route::delete('/slider/{id}', 'SliderController@destroy')->name('slider.destroy');

Route::get('/testimoni', 'TestimoniController@index')->name('testimoni');
Route::get('/testimoni/insert', 'TestimoniController@insert')->name('testimoni.insert');
Route::post('/testimoni', 'TestimoniController@store')->name('testimoni.store');
Route::get('/testimoni/{id}/edit', 'TestimoniController@edit')->name('testimoni.edit');
Route::put('/testimoni/{id}', 'TestimoniController@update')->name('testimoni.update');
Route::delete('/testimoni/{id}', 'TestimoniController@destroy')->name('testimoni.destroy');

Route::get('/galeri', 'GaleriController@index')->name('galeri');
Route::get('/galeri/insert', 'GaleriController@insert')->name('galeri.insert');
Route::post('/galeri', 'GaleriController@store')->name('galeri.store');
Route::get('/galeri/{id}/edit', 'GaleriController@edit')->name('galeri.edit');
Route::put('/galeri/{id}', 'GaleriController@update')->name('galeri.update');
Route::delete('/galeri/{id}', 'GaleriController@destroy')->name('galeri.destroy');

Route::get('/roomlist', 'RoomlistController@index')->name('roomlist');
Route::get('/roomlist/insert', 'RoomlistController@insert')->name('roomlist.insert');
Route::post('/roomlist', 'RoomlistController@store')->name('roomlist.store');
Route::get('/roomlist/{id}/edit', 'RoomlistController@edit')->name('roomlist.edit');
Route::put('/roomlist/{id}', 'RoomlistController@update')->name('roomlist.update');
Route::delete('/roomlist/{id}', 'RoomlistController@destroy')->name('roomlist.destroy');

Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/insert', 'BlogController@insert')->name('blog.insert');
Route::post('/blog', 'BlogController@store')->name('blog.store');
Route::get('/blog/{id}/edit', 'BlogController@edit')->name('blog.edit');
Route::put('/blog/{id}', 'BlogController@update')->name('blog.update');
Route::delete('/blog/{id}', 'BlogController@destroy')->name('blog.destroy');

Route::get('/blog/cetak', 'BlogController@cetak')->name('blog.cetak');
Route::get('/roomlist/cetak', 'RoomlistController@cetak')->name('roomlist.cetak');
Route::get('/galeri/cetak', 'GaleriController@cetak')->name('galeri.cetak');
Route::get('/slider/cetak', 'SliderController@cetak')->name('slider.cetak');

