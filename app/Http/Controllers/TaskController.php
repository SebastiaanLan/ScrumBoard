<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::with('scrumboard')->orderBy('created_at', 'desc')->paginate(10);

        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function show($id) {
        $task = Task::with('scrumboard')->findOrFail($id);

        return view('tasks.task', ['task' => $task]);
    }

    public function create() {
        return view('tasks.create');
    }

    public function store() {

    }
}
