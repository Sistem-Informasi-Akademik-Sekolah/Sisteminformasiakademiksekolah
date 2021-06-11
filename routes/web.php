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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/* user */
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('admin', function () { return view('admin'); })->middleware('checkRole:admin');
Route::get('admin',"DashboardController@index")->middleware('checkRole:admin');
Route::get('siswa', function () { return view('siswa'); });
// Route::get('guru', function () { return view('guru'); })->middleware(['checkRole:guru,admin']);
Route::get('guru','GuruController@index')->name('guru')->middleware(['checkRole:admin,guru']);
Route::get('kurikulum', function () { return view('kurikulum'); })->middleware(['checkRole:kurikulum,admin']);
Route::get('kaprog', function () { return view('kaprog'); })->middleware(['checkRole:kaprog,admin']);
Route::get('walas', function () { return view('walas'); })->middleware(['checkRole:walas,admin']);
/*end user*/

/*siswa*/
Route::get('siswas','SiswasController@index')->middleware('checkRole:admin');
Route::get('siswas/create','SiswasController@create')->middleware('checkRole:admin');
Route::post('siswas/store','SiswasController@store')->middleware('checkRole:admin');
Route::get('siswas/{id}','SiswasController@show')->middleware('checkRole:admin');
Route::get('siswas/edit/{siswa}','SiswasController@edit')->middleware('checkRole:admin');
Route::put('siswas/{siswa}','SiswasController@update')->middleware('checkRole:admin');
Route::delete('siswas/{siswa}','SiswasController@destroy')->middleware('checkRole:admin');
/*end siswa*/

/*kelas*/
Route::get('kelass','KelasController@index');
Route::get('kelass/create','KelasController@create');
Route::post('kelass/store','KelasController@store');
Route::get('kelass/{id}', 'KelasController@show');
Route::get('kelass/edit/{kelas}','KelasController@edit');
Route::put('kelass/{kelas}','KelasController@update');
Route::delete('kelass/{kelas}','KelasController@destroy');
/*end kelas*/

/*guru&karyawan*/

Route::get('gurudankaryawans','GurudankaryawansController@index')->middleware('checkRole:admin');
Route::get('gurudankaryawans/create','GurudankaryawansController@create')->middleware('checkRole:admin');
Route::post('gurudankaryawans/store','GurudankaryawansController@store')->middleware('checkRole:admin');
Route::get('gurudankaryawans/edit/{gurudankaryawan}', 'GurudankaryawansController@edit')->middleware('checkRole:admin');
Route::put('gurudankaryawans/{gurudankaryawan}','GurudankaryawansController@update')->middleware('checkRole:admin');
Route::delete('gurudankaryawans/{gurudankaryawan}','GurudankaryawansController@destroy')->middleware('checkRole:admin');
/*end guru&karyawan*/

/*data mapel */
Route::get('datamapel','DataMapelController@index')->middleware('checkRole:admin');
Route::get('datamapel/create','DataMapelController@create')->middleware('checkRole:admin');
Route::post('datamapel/store','DataMapelController@store')->middleware('checkRole:admin');
Route::get('datamapel/edit/{datamapel}','DataMapelController@edit')->middleware('checkRole:admin');
Route::put('datamapel/{datamapel}','DataMapelController@update')->middleware('checkRole:admin');
Route::delete('datamapel/{datamapel}',"DataMapelController@destroy")->middleware('checkRole:admin');
/*end data mapel*/

/*data nilai*/
Route::get('datanilai','DataNilaiController@index')->middleware('checkRole:admin'); 
Route::get('datanilai/create','DataNilaiController@create')->middleware('checkRole:admin');
Route::post('datanilai/store','DataNilaiController@store')->middleware('checkRole:admin'); 
Route::get('datanilai/edit/{datanilai}','DataNilaiController@edit')->middleware('checkRole:admin'); 
Route::put('datanilai/{datanilai}','DataNilaiController@update')->middleware('checkRole:admin'); 
Route::delete('datanilai/{datanilai}','DataNilaiController@destroy')->middleware('checkRole:admin');
/*end data nilai*/

/*cetak raport*/
Route::get('dataraport','DataRaportController@index')->middleware('checkRole:admin');
Route::get('dataraport/create','DataRaportController@create')->middleware('checkRole:admin');
Route::post('dataraport/store','DataRaportController@store')->middleware('checkRole:admin');
Route::get('dataraport/{id}','DataRaportController@show')->middleware('checkRole:admin');
/*end cetak raport*/