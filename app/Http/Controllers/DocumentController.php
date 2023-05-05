<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documents = Document::all();
        return view('documents.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('documents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fileName = '';
        //make the file name unique for future calls
        if ($request->hasFile('fichier')) {
            $fileName = $request->getSchemeAndHttpHost() . '/assets/PDF/' . time() . '.' . $request->fichier->extension();
            $request->fichier->move(public_path('/assets/PDF/'), $fileName);
        }
        //the file is already in the directory we need to move the name to the BD
        $document = new Document;
        $document->titre = $request->input('titre');
        $document->description = $request->input('description');
        $document->fichier = $fileName;
        //here we insert the document into the database
        $document->save();

        return redirect()->route('documents.index')->with('success', 'Document uploaded successfully.');
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'lib' => 'required',
    //         'description' => 'required',
    //         'fichier' => 'required',
    //     ]);
    //     $input = $request->all();
    //     Document::create($input);
    //     return redirect()->route('documents.index')
    //         ->with('success', 'Sites Added succ');
    // }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        return view('documents.show', compact('document'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        return view('documents.edit', compact('document'));
    }

    public function download(Document $document)
    {
        $pathToFile = ($document->fichier);
        return (`  <iframe src="{{ asset($document->fichier) }}" frameborder="0" class="w-full h-full"></iframe>
`);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Document $document)
    {
        $input = $request->all();
        $document->update($input);
        return redirect()->route('documents.index')
            ->with('success', 'Sites UPDATE  succ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        $document->delete();
        return redirect()->route('documents.index')
            ->with('success', 'Sites DELETED  succ');
    }
}
