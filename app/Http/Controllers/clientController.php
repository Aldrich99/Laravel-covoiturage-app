<?php

namespace App\Http\Controllers;

use App\Models\messageEnvoiClientConducteurs;
use App\Models\trajet_utilisateurs;
use Illuminate\Http\Request;

class clientController extends Controller
{
    public function client() {
        $utilisateur =  auth()->user() ;
        
        //historique
        $trajet = trajet_utilisateurs::where("trajet_id",$utilisateur->id)->orderBy('created_at' ,'desc')->get();
        
        $message = messageEnvoiClientConducteurs::where("id",$utilisateur->id)->orderBy('created_at' ,'desc')->get();
        
       
        return view('client',['trajet'=>count($trajet) , 'message'=>count($message)])   ;
    }
}
