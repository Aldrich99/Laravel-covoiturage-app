<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trajet_utilisateurs;

class supprimerTrajetController extends Controller
{
    public function supprimerTrajet($id){
         trajet_utilisateurs::where('id' , $id)->delete($id);
      
        
        flash("Trajet supprimer avec succes")->success();
        return back();
    }
}
