<?php

use App\Http\Controllers\TaskController;
use App\Models\User;
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

// Route::get('/tasks', [ TaskController::class, 'index' ]);
// Route::post('/tasks', [TaskController::class, 'store']);
// Route::get('/tasks/{id}/edit' [TaskController::class, 'edit']);

Route::resource('tasks', TaskController::class);
