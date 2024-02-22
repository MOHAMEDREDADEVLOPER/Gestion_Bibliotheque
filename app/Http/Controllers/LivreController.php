<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livre;
use App\Models\Auteur;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\LivreImport;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livres = Livre::whereNotNull('image_couverture')->get();

    
        // Fetching authors for each book
        $auteurs = [];
        foreach ($livres as $livre) {
            $auteur = Auteur::find($livre->auteur_id); // Assuming there's a relation between Livre and Auteur
            if ($auteur) {
                $auteurs[$livre->id] = $auteur; // Assuming you want to associate each author with their book by book ID
            }
            // Replace image_couverture with asset URL
            $livre->image_couverture = asset('storage/' . $livre->image_couverture);
          
        }
    
        return view('livres.index', compact('livres', 'auteurs'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('livres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string',
            'année_publication' => 'required|numeric',
            'genre' => 'required|string',
            'résumé' => 'required|string',
            'langue' => 'required|string',
            'nombre_exemplaires' => 'required|numeric',
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'image_couverture' => 'required|image|mimes:png,jpg,jpeg',
        ]);
    
        $livre = new Livre($request->all());
        $auteur = Auteur::where('nom', $request->auteur_id)->first();
        if ($auteur) {
            $livre->auteur_id = $auteur->id;
        } else {
            $auteur = new Auteur();
            $auteur->nom = $request->nom;
            $auteur->prenom = $request->prenom;
            $auteur->save();
            $livre->auteur_id = $auteur->id;
        }
    
        if ($request->hasFile('image_couverture')){
            $livre->image_couverture = $request->file('image_couverture')->store('images','public');
        }
    
        if (isset($request->disponible)) {
            $livre->disponible = 'on';
        } else {
            $livre->disponible = 'off';
        }
        
        $livre->save();
    
        return redirect()->route('livres.index')->with('success', 'Livre créé avec succès.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $livre = Livre::with("auteur")->find($id);

        $auteurs = [];
        return view('livres.show', compact('livre'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $livre = Livre::with("auteur")->find($id);
        $auteurs = [];
    
        $auteur = Auteur::find($livre->auteur_id); 
        if ($auteur) {
            $auteurs[$livre->id] = $auteur; 
        }
        
        return view('livres.edit', compact('livre', 'auteurs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $livre = Livre::find($id);

        $request->validate([
            'titre' => 'required|string',
            'année_publication' => 'required|numeric',
            'genre' => 'required|string',
            'résumé' => 'required|string',
            'langue' => 'required|string',
            'nombre_exemplaires' => 'required|numeric',
            'disponible' => 'required',
            'image_couverture' => 'image|mimes:png,jpg,jpeg',
        ]);
        $livre=Livre::findOrFail($id);

        $livre->update([
            'titre' => $request->input('titre'),
            'année_publication' => $request->input('année_publication'),
            'genre' => $request->input('genre'),
            'résumé' => $request->input('résumé'),
            'langue' => $request->input('langue'),
            'nombre_exemplaires' => $request->input('nombre_exemplaires'),
            'disponible' => $request->input('disponible'),
            'nombre_exemplaires' => $request->input('nombre_exemplaires'),


        ]);

        if ($request->hasFile('image_couverture')) {
            $livre->image_couverture = $request->file('image_couverture')->store('images', 'public');
            $livre->update();
        }

        return redirect()->route('livres.show', $livre->id)->with('success', 'Produit mis à jour avec succès.');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $livre = Livre::find($id);

        $livre->delete();

        return redirect()->route('livres.index')->with('success', 'Livre supprimé avec succès.');
  
    }
    public function import(Request $request) 
    {
        Excel::import(new LivresImport, $request->file('fichier')->store('temp') );
        
        return redirect()->route('livres.index')->with('success', 'All good!');
    }
}
