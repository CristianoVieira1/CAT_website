<?php

use Illuminate\Support\Facades\Route;

// CURSOS
Route::get('/', 'WebController@home')->name('home');
Route::get('/Sobre-Nos', 'WebController@about')->name('about');
Route::get('/Premiacoes', 'WebController@awards')->name('awards');
Route::get('/Treinamentos', 'WebController@course')->name('course');
Route::get('/Servicos', 'WebController@service')->name('service');
Route::get('/Contato', 'WebController@contact')->name('contact');
Route::get('/curso/{uri}', 'WebController@details')->name('details');
Route::get('/Servicos-detalhes/{uri}', 'WebController@serviceDetails')->name('serviceDetails');

Route::post('/sendEmail', 'WebController@sendEmail')->name('sendEmail');


// FACUDADE
Route::get('/Faculdade', 'WebController@facuHome')->name('facuHome');
Route::get('/Graduacao', 'WebController@facuGraduacao')->name('facuGraduacao');
Route::get('/Pos-Graduacao', 'WebController@facuPosGraduacao')->name('facuPosGraduacao');
Route::get('/Extensao', 'WebController@facuExtencao')->name('facuExtencao');
Route::get('/EAD-Pleno', 'WebController@facuPleno')->name('facuPleno');
Route::get('/Perguntas-Frequentes', 'WebController@facuDuvidas')->name('facuDuvidas');
Route::get('/Institucional', 'WebController@facuAbout')->name('facuAbout');
Route::get('/Bacharelado/{url}', 'WebController@facuBacha')->name('facuBachas');
Route::get('/Licenciatura/{url}', 'WebController@facuLicen')->name('facuLicens');
Route::get('/Tecnologia/{url}', 'WebController@facuTecno')->name('facuTecnos');
Route::get('/Educacao/{url}', 'WebController@facuEduca')->name('facuEducas');
Route::get('/Extensao-Curso/{url}', 'WebController@facuExtensCourse')->name('facuExtens');
Route::get('/Contato-Facudade', 'WebController@facuContact')->name('facuContact');
Route::get('/Cursos', 'WebController@cursosHome')->name('cursosHome');

// EMAIL CONTATO

Route::post('/facuMail', 'WebController@facuMail')->name('facuMail');

// EMAIL MATRICULA
Route::post('/facuMatricula', 'WebController@facuMatricula')->name('facuMatricula');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
