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

Route::get('/', 'PageController@homePage')->name('homePage');

Route::get('notasPage', 'PageController@notasPage')->name('notasPage');

Route::get('/detalle/{id}', 'PageController@detalle')->name('notas.detalle');

Route::post('notasPage', 'PageController@crear')->name('notas.crear');

Route::get('/editar/{id}', 'PageController@editar')->name('notas.editar');

Route::put('/editar/{id}', 'PageController@update')->name('notas.update');

Route::delete('/eliminar/{id}', 'PageController@eliminar')->name('notas.eliminar');

Route::get('fotos', 'PageController@fotos')-> name('fotos');

Route::get('blog', 'PageController@blog')->name('blog');

Route::get('nosotros/{nombre?}', 'PageController@nosotros')->name('nosotros');

Route::get('asignationPage', 'PageController@asignacion')->name('asignacion');