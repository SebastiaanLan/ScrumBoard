<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function(){
    $tasks = [
        ['name' => 'db maken', 'urgency' => 2, 'id' => 0],
        ['name' => 'programmeren', 'urgency' => 1, 'id' => 1],
        ['name' => 'documenteren', 'urgency' => 3, 'id' => 2],
    ];

    return view('tasks.index', ['tasks' => $tasks, 'greeting' => 'hello']);
});

Route::get('/tasks/create', function () {
    return view('tasks.create');
});

Route::get('/tasks/{id}', function($id) {
    return view('tasks.task', ['id' => $id]);
});
