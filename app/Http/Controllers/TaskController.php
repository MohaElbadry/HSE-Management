<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projets = Projet::all();
        $tasks = Task::all();
        return view('tasks.index', compact('tasks', 'projets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projets = Projet::all();
        return view('tasks.create', compact('projets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'lib' => 'required',
            'description' => 'required',
            'projet_id' => 'required',
            'task_start' => 'required',
            'task_end' => 'required'
        ]);
        Task::create($validatedData);
        return redirect()->route('tasks.index')->with('success', 'risk added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        $projets = Projet::all();
        return view('risks.show', compact('projets', 'task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $input = $request->all();
        $task->update($input);
        return redirect()->route('tasks.index')
            ->with('success', 'task UPDATE  succ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')
            ->with('success', 'task DELETED  succ');
    }
}
