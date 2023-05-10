<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\Task;
use App\Models\User;
use App\Models\UserListTask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersListTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $list = DB::table('user_list_tasks')
            ->join('users', 'user_list_tasks.user_id', '=', 'users.id')
            ->join('tasks', 'user_list_tasks.task_id', '=', 'tasks.id')
            ->select('user_list_tasks.*', 'users.name as user_name', 'tasks.lib as task_lib')
            ->get();
        // dd($list);

        $list = UserListTask::all();

        if ($request->wantsJson()) {
            return response()->json(['list' => $list]);
        }



        return view('users_lists.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $tasks = Task::all();
        return view('users_lists.create', compact('users', 'tasks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // Add validation rules for the input fields
            'task_id' => 'required',
            'user_id' => 'required',
        ]);

        UserListTask::create($validatedData);

        return redirect()->route('users_lists.index')->with('success', 'User List Task added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, UserListTask $userListTask)
    {
        if ($request->wantsJson()) {
            return response()->json(['userListTask' => $userListTask]);
        }

        return view('users_lists.show', compact('userListTask'));
    }

    public function destroy($id)
    {
        // dd($id);

        $task = UserListTask::find($id);

        if ($task) {
            // Task not found, handle the error as needed
            $task->delete();
            return redirect()->route('users_lists.index')->with('success', 'User List Task deleted successfully');
        }
        return redirect()->route('users_lists.index')->with('success', 'User List are NOTE  deleted successfully');
    }
}
