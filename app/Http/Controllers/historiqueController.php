<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trajet_utilisateurs;
use app\Models\Utilisateurs;

class historiqueController extends Controller
{
    function historiqueController() {

        $utilisateur =  auth()->user() ;
        $trajet = trajet_utilisateurs::where("trajet_id",$utilisateur->id)->orderBy('created_at' ,'desc')->get();
        return view('historique' , [
            'utilisateur' =>$utilisateur,
            'trajet'=>$trajet
        ]);
     }
}
