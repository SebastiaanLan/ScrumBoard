<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Scrumboard;

class TaskController extends Controller
{
    public function show(Scrumboard $scrumboard, Task $task) {
        return view('tasks.show', ['task' => $task, 'scrumboard' => $scrumboard]);
    }

    public function create(Scrumboard $scrumboard) {
        return view('tasks.create', ['scrumboard' => $scrumboard]);
    }

    public function store(Request $request, Scrumboard $scrumboard) {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'priority' => 'required|integer|min:1|max:3',
            'description' => 'required|string|min:1|max:1000',
        ]);

        $scrumboard->tasks()->create($validated);

        return redirect()->route('scrumboards.show', $scrumboard->slug);
    }

    public function destroy(Scrumboard $scrumboard, Task $task) {
        $task->delete();

        return redirect()->route('scrumboards.show', $scrumboard->slug);
    }
    
    public function update(Request $request, Scrumboard $scrumboard, Task $task) {
        $validated = $request->validate([
            'status' => 'required|in:backlog,todo,doing,done',
        ]);

        $task->update($validated);

        return back();
    }
}
