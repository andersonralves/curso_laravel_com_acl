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
/*
Route::get('/home', 'SiteController@home');

Route::get('/post/{id}/update', 'SiteController@update');

Route::get('/roles-permissions', 'SiteController@rolesPermission');
*/

Route::group(['prefix' => 'painel'], function(){

    // PostController
    Route::get('posts', 'Painel\PostController@index');

    // PermissionController
    Route::get('permissions', 'Painel\PermissionController@index');

    // RoleController
    Route::get('roles', 'Painel\RoleController@index');
    Route::get('roles/{id}/permissions', 'Painel\RoleController@permissions');

    // RoleController
    Route::get('users', 'Painel\UserController@index');

    // PainelController
    Route::get('/', 'Painel\PainelController@index');

});

Route::auth();

Route::get('/', 'Portal\SiteController@index');

