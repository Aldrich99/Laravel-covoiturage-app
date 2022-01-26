<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Utilisateurs;
use App\Models\trajet_utilisateurs;

class RechercherController extends Controller
{
    public function RechercherController() {
        return view('rechercher');
        
    }
    
    public function RechercheTrajet() {
        
        $trajetsDispo = trajet_utilisateurs::where([
            ['ville_depart' , '=' , request('ville_depart')],
            ['ville_arriver' , '=' , request('ville_arriver')],
            ['date_depart' , '=' , request('date_depart')]
        ])->get();
         return view('/rechercher',[
             'trajet'=>$trajetsDispo , 
             
         ]);
         
         
        
    }
    
    
}
