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

    public function show(Task $task) {
        $task->load('scrumboard');

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

        return redirect()->route('tasks.index')->with('succes', 'Task Created');
    }

    public function destroy(Task $task) {
        $task->delete();

        return redirect()->route('tasks.index')->with('succes', 'Task Deleted');
    }
}
