<?php

use App\Http\Controllers\ProductController;
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

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    /**
     * Home Routes
     */
    Route::get('/', 'ProductController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function () {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
    });

    Route::group(['middleware' => ['auth']], function () {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});

Route::get('/', function () {
    return view('home.index');
});

Route::resource('products', ProductController::class);

use App\Http\Controllers\UserController;

Route::get('/add-user', [UserController::class, 'insertRecord']);
Route::get('/get-phone/{id}', [UserController::class, 'fetchPhoneByUser']);

use App\Http\Controllers\PostController;

Route::get('/add-post', [PostController::class, 'addPost']);
Route::get('/add-comment/{id}', [PostController::class, 'addComment']);
Route::get('/get-comments/{id}', [PostController::class, 'getCommentsByPost']);

use App\Http\Controllers\RoleController;

Route::get('/add-role', [RoleController::class, 'addRole']);
Route::get('/add-users', [RoleController::class, 'addUsers']);
Route::get('/rolesbyuser/{id}', [RoleController::class, 'getAllRolesByUser']);
Route::get('/usersbyrole/{id}', [RoleController::class, 'getAllUsersByRole']);

Route::resource('products', ProductController::class);
