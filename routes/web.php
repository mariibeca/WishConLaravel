<?php

/* Rutas nuevas */

        Route::get('/products', 'ProductController@create');
        
        Route::post('/products', 'ProductController@save');

      
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
