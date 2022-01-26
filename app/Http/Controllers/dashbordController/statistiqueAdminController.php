<?php

namespace App\Http\Controllers\dashbordController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Doctrine\DBAL\Schema\View;
use App\Models\Utilisateurs;
use App\Models\abonnementcontrollers;
use App\Models\trajet_utilisateurs;
use App\Models\messageEnvoiClientConducteurs;

class statistiqueAdminController extends Controller
{
    public function statistique() {
        $nbreUtilisateurs = Utilisateurs::all();
        $nbreAbonnement = abonnementcontrollers::all();
        $nbreTrajet = trajet_utilisateurs::all();
        $nbreMessage = messageEnvoiClientConducteurs::all();
        
        return view('administration.statistiqueAdmin',[
            'nbreUtilisateurs'=>count($nbreUtilisateurs),
            'nbreAbonnement'=>count($nbreAbonnement),
            'nbreTrajet'=>count($nbreTrajet),
            'nbreMessage'=>count($nbreMessage),
        ]);
        
    }
}
