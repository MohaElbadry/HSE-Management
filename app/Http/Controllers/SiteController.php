<?php

namespace App\Http\Controllers;
use App\Models\Projet;
use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sites = Site::all();
        $projets = Projet::all();

        if ($request->wantsJson()) {
            return response()->json([
                'sites' => $sites,
                'projets' => $projets
            ]);
        }

        return view('sites.index', compact('sites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sites.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation logic

        $input = $request->all();
        Site::create($input);

        // Check if the request wants JSON response
        if (request()->wantsJson()) {
            return response()->json(['message' => 'Sites added successfully']);
        }

        return redirect()->route('sites.index')
            ->with('success', 'Sites added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function show(Site $site)
    {
        // Check if the request wants JSON response
        if (request()->wantsJson()) {
            return response()->json($site);
        }

        return view('sites.show', compact('site'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function edit(Site $site)
    {
        return view('sites.edit', compact('site'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Site $site)
    {
        // Validation logic

        $input = $request->all();
        $site->update($input);

        // Check if the request wants JSON response
        if (request()->wantsJson()) {
            return response()->json(['message' => 'Sites updated successfully']);
        }

        return redirect()->route('sites.index')
            ->with('success', 'Sites updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function destroy(Site $site)
    {
        $site->delete();

        // Check if the request wants JSON response
        if (request()->wantsJson()) {
            return response()->json(['message' => 'Sites deleted successfully']);
        }

        return redirect()->route('sites.index')
            ->with('success', 'Sites deleted successfully');
    }
}
