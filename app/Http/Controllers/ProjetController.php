<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\Site;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Composer;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projets = Projet::all();
        return view('projets.index', compact('projets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sites = Site::all();
        $users = User::all();
        return view('projets.create', compact('sites', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'user_id' => 'required',
            'site_id' => 'required',
            'proj_start' => 'required'
        ]);

        Projet::create($validatedData);

        return redirect()->route('projets.index')->with('success', 'Project added successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(Projet $projet)
    {
        $sites = Site::all();
        $users = user::all();
        return view('projets.show', compact('projet', 'sites', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projet $projet)
    {
        $sites = Site::all();
        $users = user::all();
        return view('projets.edit', compact('projet', 'sites', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projet $projet)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'user_id' => 'required',
            'site_id' => 'required',
            'proj_start' => 'required'

        ]);
        $projet->update($validatedData);
        return redirect()->route('projets.index')
            ->with('success', 'projet UPDATE  succ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projet $projet)
    {
        $projet->delete();
        return redirect()->route('projets.index')
            ->with('success', 'projet DELETED  succ');
    }
}
