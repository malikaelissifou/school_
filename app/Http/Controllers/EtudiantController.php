<?php

namespace App\Http\Controllers;
use App\Models\Etudiant;
use App\Models\Classe;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index(){
        $liste_etudiants = Etudiant::orderBy("nom","asc")->get();
        return view("etudiant", compact("liste_etudiants"));
    }

    public function create(){
       $classes = Classe::all();
        return view("create", compact("classes"));
    }

    public function edit(Etudiant $etudiant){
        $classes = Classe::all();

         return view("editEtudiant", compact("etudiant","classes"));
     }
    
    public function store(Request $request){
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "classe_id"=>"required"
        ]);
        //Etudiant::create($request->all());

        Etudiant::create([
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "classe_id"=>$request->classe_id
        ]);
        return back()->with("success", "Ajout réussi !!!");
     }

     public function delete(Etudiant $etudiant){
        $nom_complet = $etudiant->nom." ".$etudiant->prenom;
        $etudiant->delete();
        return back()->with("successDelete","L'étudiant '$nom_complet' supprimé avec succes!");
     }

     public function update(Request $request,Etudiant $etudiant){
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "classe_id"=>"required"
        ]);
        //Etudiant::create($request->all());

        $etudiant->update([
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "classe_id"=>$request->classe_id
        ]);
        return back()->with("success", "Etudiant mis à jour avec succès !");
     }
}
