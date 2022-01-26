<?php

namespace App\Http\Controllers;

use App\Models\trajet_utilisateurs;
use Illuminate\Http\Request;
use app\Models\Utilisateurs;

class ajoutPanierController extends Controller
{
    function ajoutPanier($conducteur) {
       
        $trajetSelectionner = trajet_utilisateurs::where('trajet_id' , $conducteur)->firstOrFail();
        $infosConducteurSelectionner = Utilisateurs::where('id' , $conducteur)->firstOrFail(); 
        return  view('ajoutPanier' , [
                            
            'trajetSelectionner'=>$trajetSelectionner ,
            'infosConducteurSelectionner'=>$infosConducteurSelectionner
            
        ]);
    }
}
