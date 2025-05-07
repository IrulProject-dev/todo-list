<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $tasks =  auth()->user()->tasks;

    }

    public function store(Request $request) {
        $task = auth()->user()->tasks()->create($request->validate([
            'title' => 'required|string|max:255',
            'due_date' => 'nullable|date',
        ]));
        return response()->json($task, 201);
    }

    public function update(Request $request, Task $task) {
        $task->update($request->validate([
            'completed' => 'boolean',
        ]));
        return $task;
    }

    public function destroy(Task $task) {
        $task->delete();
        return response()->noContent();
    }
}
