<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Homepage
Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
//User management
Route::get('admin/user/form/{id?}', 'Admin\UsersController@form');
Route::post('admin/user/form/{id?}', ['uses' => 'Admin\UsersController@update', 'as' => 'user.update']);
Route::resource('admin/user', 'Admin\UsersController', ['except' => ['create', 'edit', 'store', 'show', 'update']]);
//Authenticate User
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

// Dashboard
Route::get('admin', ['as'   =>  'dashboard', 'uses' =>  'Admin\DashboardController@index']);
// Route::get('admin/author', ['as' =>  'author.dashboard', 'uses'  =>  'Admin\DashboardController@index']);

// Manuscript
Route::get('admin/manuscript/{id?}', ['as'  =>  'manuscript.form', 'uses'   =>  'Admin\ManuscriptsController@form']);
Route::post('admin/manuscript/{id?}', ['as' =>  'manuscript.update','uses'  =>  'Admin\ManuscriptsController@update']);

// Route::resource('admin/manuscript', 'Admin\ManuscriptsController',
//      [
//          'names'     => [
//                  'create'    =>  'manuscript.create',
//                  'index'     =>  'manuscript.index',
//                  'store'     =>  'manuscript.store',
//                  'edit'      =>  'manuscript.edit',
//                  'update'    =>  'manuscript.update',
//                  'destroy'   =>  'manuscript.destroy',
//                  'show'      =>  'manuscript.show'
//                  ],
//          'except'    => [
//                  'index',
//                  // 'create',
//                  // 'store',
//                  'destroy',
//                  'edit',
//                  'update',
//                  'show',
//                  ''
//                  ]
//      ]
//  );
