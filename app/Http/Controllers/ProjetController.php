<?php

/* The ProjetController class is a PHP controller that handles CRUD operations for projects, generates
PDF reports, and interacts with related models such as Site and User. */

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\Site;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf as Pdf;


class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projets = Projet::join('sites', 'projets.site_id', '=', 'sites.id')
            ->select('projets.*', 'sites.name as site_name')
            ->get();
        if (request()->wantsJson()) {
            return response()->json(['projets' => $projets]);
        }
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
        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        //     'site_id' => 'required',
        //     'proj_start' => 'required'
        // ]);

        $input = $request->all();

        Projet::create($input);

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


    /**
     * This function generates a PDF report of projects and their associated sites using Laravel and
     * downloads it.
     * 
     * @return A PDF file is being returned for download, which is generated from the data obtained
     * from the database and the view 'projets.pdf_view'.
     */
    public function pdf()
    {
        $projets = DB::table('projets')
            ->join('sites', 'projets.site_id', '=', 'sites.id')
            ->select('projets.*', 'sites.name as site_name')
            ->get();

        view()->share('projets', $projets);

        $pdf = Pdf::loadView('projets.pdf_view');

        return $pdf->download('projet_Rapport_pdf_' . time() . '.pdf');
    }

    /**
     * This function generates a PDF report for all projects and their associated risks, users, and
     * sites.
     * 
     * @return A PDF file is being returned for download.
     */
    public function Global_Pdf()
    {
        //natural join
        $projets = DB::table('projets')
            ->join('sites', 'projets.site_id', '=', 'sites.id')
            ->select('projets.*',  'sites.name as site_name')
            ->get();
        view()->share('projets', $projets);

        //natural join
        $risks = DB::table('risks')
            ->join('projets', 'risks.projet_id', '=', 'projets.id')
            ->select(
                'risks.*',
                'projets.name as projet_name'
            )
            ->get();
        view()->share('risks', $risks);

        //other tables
        $users = User::all();
        view()->share('users', $users);

        $sites = Site::all();
        view()->share('sites', $sites);


        $pdf = Pdf::loadView('projets.pdf_Globale');

        return $pdf->download('projet_Rapport_Globale_' . time() . '.pdf');
    }
}
