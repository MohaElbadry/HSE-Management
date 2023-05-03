<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\Risk;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class RiskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $risks = Risk::all();
        $projets = Projet::all();
        return view('risks.index', compact('risks', 'projets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projets = Projet::all();
        $utilisateurs = Utilisateur::all();
        return view('risks.create', compact('projets', 'utilisateurs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'lib' => 'required',
            'description' => 'required',
            'user_id' => 'required', //need to be removed
            'projet_id' => 'required',
        ]);

        Risk::create($validatedData);

        return redirect()->route('risks.index')->with('success', 'risk added successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(Risk $risk)
    {
        $projets = Projet::all();
        $utilisateurs = Utilisateur::all();
        return view('risks.show', compact('projets', 'risk', 'utilisateurs'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Risk $risk)
    {
        $projets = Projet::all();
        $utilisateurs = Utilisateur::all();
        return view('risks.edit', compact('projets', 'risk', 'utilisateurs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Risk $risk)
    {
        // $validatedData = $request->all([

        //     'lib' => 'required',
        //     'description' => 'required',
        //     'user_id' => 'required',
        //     'projet_id' => 'required',
        // ]);
        // dd($validatedData);
        // echo ('e');
        $input = $request->all();

        $risk->update($input);
        return redirect()->route('risks.index')
            ->with('success', 'projet UPDATE  succ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Risk $risk)
    {
        $risk->delete();
        return redirect()->route('risks.index')
            ->with('success', 'projet DELETED  succ');
    }
}
