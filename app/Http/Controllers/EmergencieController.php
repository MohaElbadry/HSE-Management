<?php

namespace App\Http\Controllers;

use App\Models\Emergencie;
use App\Models\Projet;
use Illuminate\Http\Request;

class EmergencieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $emergencies = Emergencie::all();
        return view('emergencies.index', compact('emergencies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projets = Projet::all();
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

        return redirect()->route('emergencies.index')->with('success', 'risk added successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(Emergencie $emergencie)
    {
        $projets = Projet::all();
        return view('emergencies.show', compact('projets', 'emergencie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Emergencie $emergencie)
    {
        // dd($emergencie);
        $projets = Projet::all();
        return view('emergencies.edit', compact('projets', 'emergencie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Emergencie $emergencie)
    {
        $input = $request->all();
        $emergencie->update($input);
        return redirect()->route('emergencies.index')
            ->with('success', 'emergencies UPDATE  succ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Emergencie $emergencie)
    {
        $emergencie->delete();
        return redirect()->route('emergencies.index')
            ->with('success', 'incident DELETED  succ');
    }
}
