<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecetteRequest;
use App\Models\Recette;
use Illuminate\Http\Request;

class RecetteController extends Controller
{

    public function index()
    {
        $recettes = Recette::paginate(6); 
        return view('recettes.index', compact('recettes')); 
    }

    public function Afficher_all()
    {
        $recettes = Recette::paginate(5); 
        return view('recettes.home', compact('recettes')); 
    }

    public function Afficher_detail(Request $request)
    {
            $id = (int)$request->id;
            $recettes= Recette::find($id);
            // dd($recettes);
            return view('recettes.detail' ,compact('recettes'));
    }

    public function create()
    {
        $recettes = new Recette();
        $isUpdate = false;
        return view('recettes.create',compact('recettes' , 'isUpdate'));
    }

    public function store(RecetteRequest $request)
    {
        $validatedData = $request->validated();
        if($request->hasFile('image')){
            $validatedData['image'] = $request->file('image')->store('recettes', 'public');
        }
        $recette = new Recette($validatedData);
        // dd($recette);
        if ($recette->save()) {
            return redirect()->route('recettes.index')->with('success', 'Recette ajoute');
        } else {
            return redirect()->back()->withErrors(['error' , 'Une erreur ']);
        }
    }

    public function show(Recette $recettes)
    {
        //
    }

    public function edit($id)
    { 
        $isUpdate = true;

        $recettes = Recette::find($id);
        // dd($recettes);
        return view('recettes.create',compact('recettes','isUpdate'));
    }

    public function update(RecetteRequest $request, Recette $recettes , $id)
{
    $ID = Recette::find($id);
    $formFields = $request->validated();

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images'); 
        $formFields['image'] = $imagePath;
    }
// dd($formFields);
$ID->update($formFields);
    
    return redirect()->route('recettes.index')->with('success', 'Recette mise à jour avec succès');
}

        public function destroy(Recette $recette)
        { 
            $recette = Recette::find($recette->id);
            $recette->delete();
            return redirect()->back()->with('success', 'Recette supprimée avec succès');
        }

        public function search(){
            $search = $_GET['query'];
            $recettes = Recette::where('title' , 'LIKE' , '%' .$search.'%')->get();
            return view('recettes.search',compact('recettes'));
        }
        
    
}
// ->with()