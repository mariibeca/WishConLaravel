<?php

/* Rutas nuevas */

        Route::post('/profile/edit/', 'UserController@update')->middleware('auth');
        Route::get('/profile/edit/', 'UserController@edit')->middleware('auth');
        Route::get('/profile', 'UserController@profile')->middleware('auth');
        Route::get('/products/save', function(){
          return view('layouts.productsSave');
        });
        Route::delete('admin/products/delete/{id}', 'ProductController@delete')->middleware(['auth', 'admin']);
        Route::get('admin/products/create', 'ProductController@create')->middleware(['auth', 'admin']);
        Route::post('admin/products/create', 'ProductController@save')->middleware(['auth', 'admin']);
        Route::get('admin/products', 'ProductController@index')->middleware(['auth', 'admin']); //funciona
        Route::post('admin/products/edit/{id}', 'ProductController@update')->middleware(['auth', 'admin']);
        Route::get('admin/products/edit/{id}', 'ProductController@edit')->middleware(['auth', 'admin']);

        Route::get('/', function(){
          return view('layouts.index');
        });

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
          return view('auth.register');
        });

        Route::get('/ropa', function(){
          return view('layouts.ropa');
        });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
