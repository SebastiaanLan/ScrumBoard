<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Scrumboard;
use App\Models\Task;

class ScrumboardController extends Controller
{
    public function index() {
        $scrumboards = Scrumboard::orderBy('created_at', 'desc')->paginate(10);

        return view('scrumboards.index', ['scrumboards' => $scrumboards]);
    }

    public function show(Scrumboard $scrumboard) {
        $tasks = Task::where('scrumboard_id', $scrumboard->id)->OrderBy('updated_at', 'asc')->get();
        
        return view('scrumboards.show', ['scrumboard' => $scrumboard, 'tasks' => $tasks]);
    }

    public function create() {
        return view('scrumboards.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:scrumboards,name',
            'description' => 'required|string|min:1|max:1000',
        ]);

        $validated['slug'] = Str::slug($request->name);

        Scrumboard::create($validated);

        return redirect()->route('scrumboards.index');
    }

    public function destroy(Scrumboard $scrumboard) {
        $scrumboard->delete();

        return redirect()->route('scrumboards.index');
    }
}
