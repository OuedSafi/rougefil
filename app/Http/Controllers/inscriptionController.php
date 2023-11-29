<?php

namespace App\Http\Controllers;

use App\Http\Requests\InscriptionRequest;
use App\Models\Inscription;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function index()
    {
        
    
        return view('recherche');
    }


    public function recherche(Request $request)
    {
        $nom_de_l_eleve = $request->input('nom_de_l_eleve');
    
        if (empty($nom_de_l_eleve)) {
            // La valeur de la colonne 'nom_de_l_eleve' n'est pas renseignée
            return redirect()->route('inscription.index');
        }
    
        $inscription = Inscription::create([
            'nom_de_l_eleve' => $nom_de_l_eleve,
            'prenom_de_l_eleve' => $request->input('prenom_de_l_eleve'),
            'genre_de_l_eleve' => $request->input('genre_de_l_eleve'),
            'email_de_l_eleve' => $request->input('email_de_l_eleve'),
            'extrait_de_naissance_de_l_eleve' => $request->input('extrait_de_naissance_de_l_eleve'),
            'bulletin_de_l_eleve' => $request->input('bulletin_de_l_eleve'),
            'tel_du_pere' => $request->input('tel_du_pere'),
        ]);
    
        return redirect()->route('list');
        return redirect()->route('liste');
    }

    public function store(Request $request)
    {
        // Obtenez les données du formulaire
        $data = $request->all();
    
        // Créez une nouvelle inscription
        $inscription = Inscription::create($data);
    
        // Retournez l'inscription
        
    }


    public function list()
    {
        $inscriptions = inscription::latest()->get();
    
        return view('list',compact("inscriptions"));
    }

    public function liste()
    {
        $inscriptions = inscription::latest()->get();
    
        return view('liste',compact("inscriptions"));
    }

    
    
}
