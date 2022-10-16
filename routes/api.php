<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RelatedPostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//////////////////////////////////////////////// PRIVATE ROUTES //////////////////////////////////////////////// 
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->post('logout', [AuthenticatedSessionController::class, 'destroy']);
// categories
Route::middleware('auth:sanctum')->post('categories/create', [CategoryController::class, 'store']);
Route::middleware('auth:sanctum')->get('categories/{category}', [CategoryController::class, 'show']);
Route::middleware('auth:sanctum')->put('categories/{category}', [CategoryController::class, 'update']);
Route::middleware('auth:sanctum')->delete('categories/{category}', [CategoryController::class, 'destroy']);

// posts
Route::middleware('auth:sanctum')->post('posts', [PostController::class, 'store']);
Route::middleware('auth:sanctum')->put('posts/{post:slug}', [PostController::class, 'update']);
Route::middleware('auth:sanctum')->delete('posts/{post:slug}', [PostController::class, 'destroy']);


//////////////////////////////////////////////// PUBLIC ROUTES //////////////////////////////////////////////// 
Route::post('register', [RegisteredUserController::class, 'store']);
Route::post('login', [AuthenticatedSessionController::class, 'store']);

// categories
Route::get('categories', [CategoryController::class, 'index']);

// posts
Route::get('home-posts', [HomeController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::get('posts', [PostController::class, 'index']);
Route::get('related-posts/{post:slug}', [RelatedPostController::class, 'index']);
Route::get('dashboard-posts', [DashboardPostController::class, 'index']);