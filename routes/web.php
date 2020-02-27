-<?php

use App\Http\Middleware\CheckAdmin;
use App\Http\Middleware\CheckUser;

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

Route::get('/', 'PageController@index');

Auth::routes();

//halaman auth default

Route::get('/getcart', 'HomeController@getcart');
Route::get('/home', 'HomeController@index')->name('home');
//controller admin
Route::get('/dashboard', 'Admin\AdminController@dashboard')->middleware(CheckAdmin::class);
Route::group(['prefix' => 'dashboard', 'middleware' => ['CheckAdmin']], function()
{   
	// Route::prefix('dashboard')->group(function () 
	// {
	Route::get('/kategori', 'Admin\AdminController@showkategori');
	Route::get('/loadkategori', 'Admin\AdminController@loadkategori');
	//Route::get('/lihat_kategori/edit/{id}', 'Admin\AdminController@edit');
	Route::post('/lihat_kategori/edit/{id}', 'Admin\AdminController@update');
	Route::get('/tambah_kategori', 'Admin\AdminController@create_kategori');
	Route::post('/tambah_kategori/tambah/', 'Admin\AdminController@store');
	Route::get('/hapus/{id}','Admin\AdminController@destroy');

	//barang
	Route::get('/barang', 'Admin\ProductController@showbarang');
	Route::get('/lihat_barang/edit/{id}', 'Admin\ProductController@edit');
	Route::post('/lihat_barang/edit/{id}', 'Admin\ProductController@update');
	Route::get('/tambah_barang', 'Admin\ProductController@create_barang');
	Route::post('/tambah_barang/tambah/', 'Admin\ProductController@store');
	Route::get('/delete/{id}','Admin\ProductController@destroy');

	//manajemen user
	Route::get('/user', 'Admin\UserController@showuser');
	Route::get('/tambah_user', 'Admin\UserController@create_user');
	Route::post('/tambah_user/tambah/', 'Admin\UserController@store');
	Route::get('/delete/{id}','Admin\UserController@destroy');
	Route::get('/lihat_user/edit/{id}', 'Admin\UserController@edit');
	Route::post('/lihat_user/edit/{id}', 'Admin\UserController@update');

	//manajemen template
	Route::get('/template','Admin\TemplateController@index');
	Route::post('/aksi/{id}','Admin\TemplateController@select'); 
	//manajemen order
	Route::get('/order/','Admin\OrderController@index'); 
	Route::get('/order/detail/{id}','Admin\OrderController@detail');
	Route::post('/order/status/{id}','Admin\OrderController@status');

	Route::get('/config/','Admin\ConfigController@index');
	Route::post('/config/update/{id}', 'Admin\ConfigController@update');

});

Route::group(['prefix' => 'member', 'middleware' => ['CheckUser']], function()
{   
//controller member
//Route::get('/dashboard_member', 'MemberController@index');
	Route::get('/dashboard', 'Member\MemberController@index');
	Route::get('/profile', 'Member\MemberController@profile');
	Route::get('/delete/{id}','Member\MemberController@destroy');
	Route::get('/cart', 'Member\MemberController@cart');
	Route::post('/tambah/cart/', 'Member\MemberController@tambahcart');
	Route::get('/order', 'Member\MemberController@order');
	Route::post('/order/store/', 'Member\MemberController@store');
	Route::get('/order/sukses/', 'Member\MemberController@sukses');
});

