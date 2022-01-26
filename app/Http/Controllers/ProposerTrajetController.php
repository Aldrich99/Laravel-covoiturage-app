<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trajet_utilisateurs;
class ProposerTrajetController extends Controller
{
   public function ProposerTrajetController() {
        return view('propositionTrajet.proposer');
    }
    
   public function EnregistrementTrajet() {
       
       request()->validate([
           'ville_arriver'=>['required'],
           
           'lieu_arriver'=>['required']  ,
           
           'date_depart'=>['required','date'] ,
           
           'heure_depart'=>['date_format:H:i'] ,
           
           'bagages'=>['sometimes'] ,
           
           'sac_main'=>['sometimes'],
           
           'fumeur'=>['required'] ,
           
           'handicaper'=>['required'] ,
           
           'prix_voyages'=>['required'] ,
           
           'numero_plaque'=>['required'] ,
           
           'nbre_places'=>['required'] ,
           
           'messages'=>['sometimes']
            
        ]);
       
       trajet_utilisateurs::create([
           'nom'=>auth()->user()->nom ,
           'prenom'=>auth()->user()->prenom ,
           'nom'=>auth()->user()->nom ,
           'numero_de_telephone'=>auth()->user()->numero_de_telephone,
           'email'=>auth()->user()->email ,
           'trajet_id'=>auth()->user()->id,
           'ville_depart'=>request('lieu_depart'),
           'lieux_depart'=>request('lieu_depart'),
           'ville_arriver'=>request('ville_arriver'),
           'lieu_arriver'=>request('lieu_arriver'),
           'date_depart'=>request('date_depart'),
           'heure_depart'=>request('heure_depart'),
           'bagages'=>request('bagages'),
           'sac_a_main'=>request('sac_main'),
           'fumeur'=>request('fumeur'),
           'handicaper'=>request('handicaper'),
           'prix_voyages'=>request('prix_voyages'),
           'numero_plaque'=>request('numero_plaque'),
           'nbre_places'=>request('nbre_places'),
           'messages'=>request('nbre_places'),
           
       ]);
       
      flash("Trajet enregistrer")->success();
     return back();
    }
}
