<?php



// Route::get('test', function () {
//     return view('welcome');
// })->name('test');

Route::get('/', 'AuthController@index')->middleware('guest')->name('login');
Route::post('/', 'AuthController@login');
Route::get('register', 'AuthController@getregister')->middleware('guest')->name('register');
Route::post('register', 'AuthController@postregister');
Route::get('home', 'AuthController@home')->middleware('auth')->name('home');
Route::post('/update', 'AuthController@update')->middleware('auth')->name('update');
Route::post('/changepass', 'AuthController@passganti')->middleware('auth')->name('passganti');
Route::post('/permohonan_cuti', 'AuthController@permohonan_cuti')->middleware('auth')->name('permohonan_cuti');
Route::get('Form_Pengajuan_Cuti', 'AuthController@form_pengajuan_cuti')->middleware('auth')->name('form_pengajuan_cuti');
Route::get('/logout', 'AuthController@logout')->middleware('auth')->name('logout');





