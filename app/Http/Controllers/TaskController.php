<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Scrumboard;

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
        $scrumboards = Scrumboard::all();

        return view('tasks.create', ["scrumboards" => $scrumboards]);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'priority' => 'required|integer|min:1|max:5',
            'description' => 'required|string|min:1|max:1000',
            'scrumboard_id' => 'required|exists:scrumboards,id',
        ]);

        Task::create($validated);

        return redirect()->route('tasks.index');
    }
}
