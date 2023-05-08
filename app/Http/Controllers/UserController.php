<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'password' => 'required'
        ]);
        $input = $request->all();
        User::create($input);
        return redirect()->route('users.index')
            ->with('success', 'users Added succ');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $input = $request->all();
        $user->update($input);
        return redirect()->route('users.index')
            ->with('success', 'users UPDATE  succ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {

        try {
            $user->delete();
            return redirect()->route('users.index')
                ->with('success', 'users DELETED  succ');
        } catch (\Illuminate\Database\QueryException) {
            return redirect()->route('users.index')
                ->with('ERRO', 'Cannot delete this user because they have associated data in another table.');
        }
    }
}
