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
    public function index(Request $request)
    {
        $incidents = Incident::all();
        $projets = Projet::all();

        if ($request->wantsJson()) {
            return response()->json([
                'incidents' => $incidents,
                'projets' => $projets
            ]);
        }

        return view('incidents.index', compact('incidents', 'projets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $projets = Projet::all();

        if ($request->wantsJson()) {
            return response()->json([
                'projets' => $projets,
            ]);
        }

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

        if ($request->wantsJson()) {
            return response()->json(['success' => 'Incident added successfully']);
        }

        return redirect()->route('incidents.index')->with('success', 'Incident added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Incident $incident)
    {
        $projets = Projet::all();

        if ($request->wantsJson()) {
            return response()->json([
                'incident' => $incident,
                'projets' => $projets,
            ]);
        }

        return view('incidents.show', compact('incident', 'projets'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Incident $incident)
    {
        $projets = Projet::all();

        if ($request->wantsJson()) {
            return response()->json([
                'incident' => $incident,
                'projets' => $projets,
            ]);
        }

        return view('incidents.edit', compact('incident', 'projets'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Incident $incident)
    {
        // dd($request->all());
        // $validatedData = $request->validate([
        //     'lib' => 'required',
        //     'description' => 'required',
        //     'projet_id' => 'required',
        // ]);

        $incident->update($request->all());

        if ($request->wantsJson()) {
            return response()->json(['success' => 'Incident updated successfully']);
        }

        return redirect()->route('incidents.index')->with('success', 'Incident updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Incident $incident)
    {
        $incident->delete();



        return redirect()->route('incidents.index')
            ->with('success', 'projet UPDATE  succ');
    }
}
