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

Route::get('/', function () {
    return view('welcome');
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
