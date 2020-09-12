<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render(
        'Welcome', [
            'foo' => 'bar'
        ]
    );
});

Route::get('/about', function () {
    return Inertia::render(
        'About', [
            'foo' => 'bar'
        ]
    );
});

Route::get('/contact', function () {
    return Inertia::render(
        'Contact', [
            'foo' => 'bar'
        ]
    );
});

Route::get('users/', [UsersController::class, 'index']);
Route::get('users/create', [UsersController::class, 'create']);
Route::post('users/', [UsersController::class, 'store']);
Route::get('users/{user}/edit', [UsersController::class, 'edit']);
Route::patch('users/{user}', [UsersController::class, 'update']);
Route::delete('users/{user}', [UsersController::class, 'destroy']);
