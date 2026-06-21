<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::latest()->get();

        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);

        Task::create([
            'title' => $request->title,
            'status' => 'New'
        ]);

        return redirect('/');
    }

    public function update(Task $task)
    {
        $task->update([
            'completed' => !$task->completed
        ]);

        return redirect('/');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect('/');
    }
    
    public function updateStatus(Request $request, Task $task)
    {
        $task->update([
            'status' => $request->status
        ]);

        return redirect('/');
    }
}