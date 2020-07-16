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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);
// Route::get('/transaksi', 'TransaksiController@transaksi');
// Route::get('/transaksi/tambah','TransaksiController@tambah');
// Route::post('/transaksi/store','TransaksiController@store');
// Route::put('/transaksi/{id}','TransaksiController@update');
// Route::get('/transaksi/edit/{id}','TransaksiController@edit');
// Route::get('/transaksi/hapus/{id}','TransaksiController@hapus');
// Route::get('/transaksi/detail/{id}','TransaksiController@detail');
// Route::get('/transaksi/cari','TransaksiController@cari');
Route::get('/pelanggan','PelangganController@pelanggan');
Route::get('/pelanggan/{id}/detail','PelangganController@detail');
Route::get('/pelanggan/tambah','PelangganController@tambah');
Route::post('/pelanggan/create','PelangganController@create');
Route::get('/pelanggan/{id}/edit','PelangganController@edit');
Route::post('/pelanggan/{id}/update','PelangganController@update');
Route::get('/pelanggan/{id}/delete','PelangganController@delete');
Route::get('/pelanggan/cari','PelangganController@cari');

Route::get('/ps','PsController@ps');
Route::get('/ps/tambah','PsController@tambah');
Route::post('/ps/create','PsController@create');
Route::get('/ps/{id}/edit','PsController@edit');
Route::post('/ps/{id}/update','PsController@update');
Route::get('/ps/{id}/delete','PsController@delete');
Route::get('/ps/cari','PsController@cari');
// Route::get('/sopir', 'SopirController@sopir');
// Route::get('/sopir/tambah', 'SopirController@tambah');
// Route::post('/sopir/store', 'SopirController@store');
// Route::get('/sopir/edit/{sopir_id}','SopirController@edit');
// Route::post('/sopir/update','SopirController@update');
// Route::get('/sopir/hapus/{id}','SopirController@hapus');
// Route::get('/sopir/cari','SopirController@cari');
// Route::get('/', 'PelangganController@pelanggan');
// Route::get('/kendaraan/tambah','KendaraanController@tambah');
// Route::post('/kendaraan/store','KendaraanController@store');
// Route::get('/kendaraan/edit/{kendaraan_id}','KendaraanController@edit');
// Route::post('/kendaraan/update','KendaraanController@update');
// Route::get('/kendaraan/cari','KendaraanController@cari');
Route::get('/', 'DashboardController@dashboard');
Route::get('/', 'HomeAwalController@homeawal');
Route::get('/menu', 'HomeAwalController@menu');
Route::get('/about', 'HomeAwalController@about');
Route::get('/profile', 'HomeAwalController@profile');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('auth/{provider}', 'Auth\SocialiteController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\SocialiteController@handleProviderCallback');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', function(){
    return view('admin');
})->name('adminpage');
Route::get('admin-login','Auth\AdminLoginController@showLoginForm');
Route::post('admin-login', ['as' => 'admin-login', 'uses' => 'Auth\AdminLoginController@login']);
Route::get('admin-register','Auth\AdminLoginController@showRegisterPage');
Route::post('admin-register', 'Auth\AdminLoginController@register')->name('admin.register');
