<?php

namespace App\Http\Controllers;

use App\Models\daily_progres;
use App\Models\task;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks =  auth()->user()->tasks;
    }

    public function today()
    {
        $today = Carbon::now()->format('Y-m-d');

        // Ambil semua task untuk hari ini
        $tasks = auth()->user()->tasks()
            ->whereDate('created_at', $today)
            ->get();

        // Hitung jumlah task selesai dan total task
        $totalTasks = $tasks->count();
        $completedTasks = $tasks->where('completed', true)->count();

        // Hitung persentase task selesai
        $completionRate = $totalTasks > 0 ? round(($completedTasks / $totalTasks) * 100, 2) : 0;

        // Simpan data ke tabel daily_progres
        $user = auth()->user();
        $dailyProgress = daily_progres::updateOrCreate(
            [
                'user_id' => $user->id,
                'date' => $today,
            ],
            [
                'total_tasks' => $totalTasks,
                'completed_tasks' => $completedTasks,
                'completion_rate' => $completionRate,
            ]
        );

        return view('tasks.today', [
            'tasks' => $tasks,
            'today' => Carbon::now()->translatedFormat('l, d M Y'),
            'totalTasks' => $totalTasks,
            'completedTasks' => $completedTasks,
            'completionRate' => $completionRate,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        Task::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
        ]);

        return back()->with('success', 'Task berhasil ditambahkan.');
    }

    public function complete(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->completed = $request->has('is_completed');
        $task->save();

        // Update daily_progress table
        $today = now()->toDateString();
        $completedTasks = Task::where('completed', true)->whereDate('created_at', $today)->count();

        daily_progres::updateOrCreate(
            ['date' => $today],
            ['completed_tasks' => $completedTasks]
        );

        return redirect()->back()->with('status', 'Task updated successfully!');
    }
    public function update(Request $request, Task $task)
    {
        $task->update($request->validate([
            'completed' => 'boolean',
        ]));
        return $task;
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return response()->noContent();
    }
}
