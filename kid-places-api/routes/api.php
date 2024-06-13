<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/', function () {
    return ('taggle');
});

// Categories routes
Route::get('/categories', [CategoryController::class, 'list']);
Route::get('/category/{id}', [CategoryController::class, 'show']);

// Places routes
Route::get('/places', [PlaceController::class, 'list']);
Route::get('/place/{id}', [PlaceController::class, 'show']);

// Comments routes
Route::get('/comments', [CommentController::class, 'list']);
Route::get('/comment/{id}', [CommentController::class, 'show']);

// Users routes
Route::get('/users', [UserController::class, 'list']);
Route::get('/user/{id}', [UserController::class, 'show']);
