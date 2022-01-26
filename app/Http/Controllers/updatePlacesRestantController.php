<?php

namespace App\Http\Controllers;

use App\Models\trajet_utilisateurs;
use Illuminate\Http\Request;

class updatePlacesRestantController extends Controller
{
    public function updatePlacesRestant(){
        request()->validate([
            'nbresPassager'=>['required'] ,
            'id'=>['required'] ,
            'nbre_places'=>['required']
        ]);
        
        if (  request('nbresPassager') >  request('nbre_places') || request('nbresPassager') <= 0 ) {
            
            flash("Le nombres de places a reserver est incorrect .Regarder le nombre de place qui reste et recommencer")->error();
            return back();
        }else{
            $varPassager =request('nbre_places') - request('nbresPassager');
         
             trajet_utilisateurs::where('id' , request('id') )
            ->update(['nbre_places'=>$varPassager,] );
        }
        
        return view('/confirmationtrajet');
        
         
    }
}
