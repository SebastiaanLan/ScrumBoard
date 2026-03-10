<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ScrumboardController;

Route::get('/', [ScrumboardController::class, 'index'])->name('scrumboards.index');
Route::get('/scrumboards/create', [ScrumboardController::class, 'create'])->name('scrumboards.create');
Route::post('/scrumboards', [ScrumboardController::class, 'store'])->name('scrumboards.store');

Route::get('/{scrumboard}', [ScrumboardController::class, 'show'])->name('scrumboards.show');
Route::delete('/{scrumboard}', [ScrumboardController::class, 'destroy'])->name('scrumboards.destroy');

Route::get('/{scrumboard}/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/{scrumboard}/tasks', [TaskController::class, 'store'])->name('tasks.store');

Route::get('/{scrumboard}/{task}', [TaskController::class, 'show'])->name('tasks.show');
Route::delete('/{scrumboard}/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');