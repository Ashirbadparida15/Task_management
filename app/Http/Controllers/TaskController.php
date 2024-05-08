<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $query = Task::where('is_delete', 0);
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $start_date = $request->input('start_date');
            $end_date = $request->input('end_date');

            $query->whereDate('due_date', '>=', $start_date)
                  ->whereDate('due_date', '<=', $end_date);
        }
        
        $tasks = $query->get();

        return view('tasks.index', compact('tasks'));
    }

public function create()
{
    return view('tasks.create');
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required|string|max:100',
        'description' => 'nullable|string',
        'due_date' => 'nullable|date',
    ]);

    $task = new Task();
    $task->title = $validatedData['title'];
    $task->description = $validatedData['description'];
    $task->due_date = $validatedData['due_date'];
    $task->save();

    return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
}
public function edit(Task $task)
{
    return view('tasks.edit', compact('task'));
}

public function update(Request $request, Task $task)
{
    $validatedData = $request->validate([
        'title' => 'required|string|max:100',
        'description' => 'nullable|string',
        'due_date' => 'nullable|date',
    ]);

    $task->update($validatedData);

    return redirect()->route('tasks.index')->with('success', 'Task updated successfully!');
}
public function show(Task $task)
{
    return view('tasks.show', compact('task'));
}

public function destroy(Task $task)
{
    $task->update(['is_delete' => true]);

    return redirect()->route('tasks.index')->with('success', 'Task marked as deleted successfully!');
}


}
