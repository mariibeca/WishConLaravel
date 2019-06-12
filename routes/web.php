<?php

/* Rutas nuevas */

        Route::get('/products/create', 'ProductController@create');

        Route::get('/products/save', function(){
          return view('layouts.productsSave');
        });

        Route::post('/products/create', 'ProductController@save');

        Route::get('/products', 'ProductController@index'); //funciona

        Route::post('/products/edit/{id}', 'ProductController@update');

        Route::get('/products/edit/{id}', 'ProductController@edit');


        Route::get('/index', function(){
          return view('layouts.index');
        });

        Route::get('/accesorios', function(){
          return view('layouts.accesorios');
        });

        Route::get('/contacto', function(){
          return view('layouts.contacto');
        });

        Route::get('/faqs', function(){
          return view('layouts.faqs');
        });

        Route::get('/login', function(){
          return view('layouts.login');
        });

        Route::get('/registro', function(){
          return view('layouts.registro');
        });

        Route::get('/ropa', function(){
          return view('layouts.ropa');
        });

        Route::get('/', function () {
            return view('welcome');
        });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
