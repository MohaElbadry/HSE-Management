<?php

namespace App\Http\Controllers;

use App\Models\Emergencie;
use App\Models\Projet;
use Illuminate\Http\Request;
use Validator;

class EmergencieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $emergencies = Emergencie::all();

        if ($request->wantsJson()) {
            return response()->json([
                'emergencies' => $emergencies
            ]);
        }

        return view('emergencies.index', compact('emergencies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $projets = Projet::all();

        if ($request->wantsJson()) {
            return response()->json([
                'projets' => $projets
            ]);
        }

        return view('emergencies.create', compact('projets'));
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

        Emergencie::create($validatedData);

        if ($request->wantsJson()) {
            return response()->json(['success' => 'Emergency added successfully']);
        }

        return redirect()->route('emergencies.index')->with('success', 'Emergency added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($emergencie)
    {
        $emergencie = Emergencie::find($emergencie);

        // dd($emergencie);
        return view('emergencies.show', compact('emergencie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Emergencie $emergencie)
    {
        $projets = Projet::all();

        if ($request->wantsJson()) {
            return response()->json([
                'emergencie' => $emergencie,
                'projets' => $projets
            ]);
        }

        return view('emergencies.edit', compact('emergencie', 'projets'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Emergencie $emergencie)
    {
        $validatedData = $request->validate([
            'lib' => 'required',
            'description' => 'required',
            'projet_id' => 'required',
        ]);

        $emergencie->update($validatedData);

        if ($request->wantsJson()) {
            return response()->json(['success' => 'Emergency updated successfully']);
        }

        return redirect()->route('emergencies.index')->with('success', 'Emergency updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Emergencie $emergencie)
    {
        $emergencie->delete();

        if ($request->wantsJson()) {
            return response()->json(['success' => 'emergencies deleted successfully']);
        }

        return redirect()->route('emergencies.index')
            ->with('success', 'emergencies deleted successfully');
    }
}
