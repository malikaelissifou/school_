<?php

namespace App\Http\Controllers;
use App\Models\Prof;
use App\Models\Matiere;
use Illuminate\Http\Request;

class ProfController extends Controller
{
    public function indexprof(){
        $liste_profs = Prof::orderBy("nom","asc")->get();
        return view("profs.profs", compact("liste_profs"));
    }

    public function createprof(){
        $matieres = Matiere::all();
         return view("profs.createProfs", compact("matieres"));
    }

    public function editprof(Prof $prof){
        $matieres = Matiere::all();

         return view("profs.editProfs", compact("prof","matieres"));
    }

    public function storeprof(Request $requestprof){
        $requestprof->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "matiere_id"=>"required"
        ]);
        //Etudiant::create($request->all());

        Prof::create([
            "nom"=>$requestprof->nom,
            "prenom"=>$requestprof->prenom,
            "matiere_id"=>$requestprof->matiere_id
        ]);
        return back()->with("success", "Ajout prof réussi !!!");
    }
     
    public function deleteprof(Prof $prof){
        $nom_complet = $prof->nom." ".$prof->prenom;
        $prof->delete();
        return back()->with("successDelete","Le prof '$nom_complet'  a été supprimé avec succes!");
    }

    public function updateprof(Request $requestprof,Prof $prof){
        $requestprof->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "matiere_id"=>"required"
        ]);
        //Etudiant::create($request->all());

        $prof->update([
            "nom"=>$requestprof->nom,
            "prenom"=>$requestprof->prenom,
            "matiere_id"=>$requestprof->matiere_id
        ]);
        return back()->with("success", "Professeur  mis à jour avec succès !");
    }
    ///////////////////////////////////////////////////////////////////////
}
