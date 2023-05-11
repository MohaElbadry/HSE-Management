<?php

namespace App\Http\Controllers;

use App\Models\Sensibilisation;
use Illuminate\Http\Request;

class SensibilisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sensibilisations = Sensibilisation::all();

        if (request()->wantsJson()) {
            return response()->json(['sensibilisations' => $sensibilisations]);
        }

        return view('sensibilisations.index', compact('sensibilisations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sensibilisations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'titre' => 'required',
        //     'description' => 'required',
        // ]);

        Sensibilisation::create($request->all());

        if ($request->wantsJson()) {
            return response()->json(['success' => 'Sensibilisation added successfully']);
        }

        return redirect()->route('sensibilisations.index')->with('success', 'Sensibilisation added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sensibilisation  $sensibilisation
     * @return \Illuminate\Http\Response
     */
    public function show(Sensibilisation $sensibilisation)
    {
        if (request()->wantsJson()) {
            return response()->json(compact('sensibilisation'));
        }

        return view('sensibilisations.show', compact('sensibilisation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sensibilisation  $sensibilisation
     * @return \Illuminate\Http\Response
     */
    public function edit(Sensibilisation $sensibilisation)
    {
        return view('sensibilisations.edit', compact('sensibilisation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sensibilisation  $sensibilisation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sensibilisation $sensibilisation)
    {
        $validatedData = $request->validate([
            'lib' => 'required',
            'description' => 'required',
        ]);

        $sensibilisation->update($validatedData);

        if ($request->wantsJson()) {
            return response()->json(['success' => 'Sensibilisation updated successfully']);
        }

        return redirect()->route('sensibilisations.index')->with('success', 'Sensibilisation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sensibilisation  $sensibilisation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sensibilisation $sensibilisation)
    {
        $sensibilisation->delete();

        if (request()->wantsJson()) {
            return response()->json(['message' => 'INFOS deleted successfully']);
        }

        return redirect()->route('sensibilisations.index')
            ->with('success', 'Sites deleted successfully');
    }
}
