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
// Route::get('login', function () {
//     return view('auth.login');
// });

Route::get('/', function () {
    return view('index');
});


Auth::routes();
// Route::resource ('/','frontendController');
 Route::get('/home', 'HomeController@index')->name('home');
 Route::resource ('/','frontendController');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
   Route::get('/admin',function(){
return view('backend.index');
   });

//    Route::get ('index', 'frontendController@index');

Route::resource ('kategori', 'kategoriController');
Route::resource ('stok', 'stokController');
Route::resource ('jenisbarang', 'jenisbarangController');
Route::resource ('transaksi', 'transaksiController');
Route::resource ('detail', 'detailController');
});
Route::get('elmo', function () {
    return view('frontend.elmo');
});
Route::get('hello', function () {
    return view('frontend.hello');
});

Route::get('mini', function () {
    return view('frontend.mini');
});

Route::get('beruang', function () {
    return view('frontend.beruang');
});

Route::get('poni', function () {
    return view('frontend.poni');
});

Route::get('stitch', function () {
    return view('frontend.stitch');
});

Route::get('panda', function () {
    return view('frontend.panda');
});

Route::get('keropi', function () {
    return view('frontend.keropi');
});
