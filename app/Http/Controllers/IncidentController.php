<?php

namespace App\Http\Controllers;

use App\Models\Incident;
use App\Models\Projet;
use Illuminate\Http\Request;

class IncidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incidents = Incident::all();
        return view('incidents.index', compact('incidents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projets = Projet::all();
        return view('incidents.create', compact('projets'));
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
        ]);

        Incident::create($validatedData);

        return redirect()->route('incidents.index')->with('success', 'risk added successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(Incident $incident)
    {
        $projets = Projet::all();
        return view('incidents.show', compact('projets', 'incident'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Incident $incident)
    {
        $projets = Projet::all();
        return view('incidents.edit', compact('projets', 'incident'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Incident $incident)
    {

        $input = $request->all();

        $incident->update($input);
        return redirect()->route('incidents.index')
            ->with('success', 'incident UPDATE  succ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Incident $incident)
    {
        $incident->delete();
        return redirect()->route('incidents.index')
            ->with('success', 'incident DELETED  succ');
    }
}
