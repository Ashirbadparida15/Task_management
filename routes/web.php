<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// creste task
Route::any('tasks/create', [TaskController::class,'create'])->name('tasks.create');
Route::post('/tasks', [TaskController::class,'store'])->name('tasks.store');

// view task
Route::get('/', [TaskController::class,'index'])->name('tasks.index');

// update task
Route::get('/tasks/{task}/edit',  [TaskController::class,'edit'])->name('tasks.edit');
Route::put('/tasks/{task}',  [TaskController::class,'update'])->name('tasks.update');

// delette task
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');

//perticular view task
Route::get('/tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');

