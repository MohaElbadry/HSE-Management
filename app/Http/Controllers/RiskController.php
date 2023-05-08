<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\Risk;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;

class RiskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $risks = Risk::all();
        $projets = Projet::all();

        if ($request->wantsJson()) {
            return response()->json([
                'risks' => $risks,
                'projets' => $projets
            ]);
        }

        return view('risks.index', compact('risks', 'projets'));
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

        return view('risks.create', compact('projets'));
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

        Risk::create($validatedData);

        if ($request->wantsJson()) {
            return response()->json(['success' => 'Risk added successfully']);
        }

        return redirect()->route('risks.index')->with('success', 'Risk added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Risk $risk)
    {
        $projets = Projet::all();

        if ($request->wantsJson()) {
            return response()->json([
                'risk' => $risk,
                'projets' => $projets,
            ]);
        }

        return view('risks.show', compact('risk', 'projets'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Risk $risk)
    {
        $projets = Projet::all();

        if ($request->wantsJson()) {
            return response()->json([
                'risk' => $risk,
                'projets' => $projets,
            ]);
        }

        return view('risks.edit', compact('risk', 'projets'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Risk $risk)
    {
        $validatedData = $request->validate([
            'lib' => 'required',
            'description' => 'required',
            'projet_id' => 'required',
        ]);

        $risk->update($validatedData);

        if ($request->wantsJson()) {
            return response()->json(['success' => 'Risk updated successfully']);
        }

        return redirect()->route('risks.index')->with('success', 'Risk updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Risk $risk)
    {
        $risk->delete();

        if ($request()->wantsJson()) {
            return response()->json(['message' => 'RISK deleted successfully']);
        }

        return redirect()->route('risks.index')
            ->with('success', 'Sites deleted successfully');
    }
}
