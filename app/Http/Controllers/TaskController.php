<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\Task;
use App\Models\UserListTask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projets = Projet::all();
        $tasks = Task::all();

        if (request()->wantsJson()) {
            return response()->json([
                'projets' => $projets,
                'tasks' => $tasks
            ]);
        }

        return view('tasks.index', compact('tasks', 'projets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projets = Projet::all();

        if (request()->wantsJson()) {
            return response()->json($projets);
        }

        return view('tasks.create', compact('projets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'lib' => 'required',
            'description' => 'required',
            'projet_id' => 'required',
            'task_start' => 'required',
            'task_end' => 'required'
        ]);

        Task::create($validatedData);

        if (request()->wantsJson()) {
            return response()->json(['success' => 'Task added successfully']);
        }

        return redirect()->route('tasks.index')->with('success', 'Task added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        $users = DB::table('users')
            ->join('user_list_tasks', 'users.id', '=', 'user_list_tasks.user_id')
            ->where('user_list_tasks.task_id', $task->id)
            ->select('users.*')
            ->get();

        $project = DB::table('projets')
            ->join('tasks', 'projets.id', '=', 'tasks.projet_id')
            ->where('tasks.id', $task->id)
            ->select('projets.name')
            ->first();

        $projectName = $project->name;

        if (request()->wantsJson()) {
            return response()->json(compact('users', 'projectName', 'task'));
        }

        return view('tasks.show', compact('users', 'projectName', 'task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        if (request()->wantsJson()) {
            return response()->json(compact('task'));
        }

        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $input = $request->all();
        $task->update($input);

        if (request()->wantsJson()) {
            return response()->json(['success' => 'Task updated successfully']);
        }

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        if (request()->wantsJson()) {
            return response()->json(['success' => 'Task deleted successfully']);
        }

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully');
    }
}
