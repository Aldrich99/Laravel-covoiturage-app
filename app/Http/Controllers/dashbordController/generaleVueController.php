<?php

namespace App\Http\Controllers\dashbordController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\Models\Utilisateurs;
use App\Models\trajet_utilisateurs;

class generaleVueController extends Controller
{
    public function generaleVue() {
        $infosH =Utilisateurs::where('sexe','Homme')->get();
        $infosF =Utilisateurs::where('sexe','Femme')->get();
        $infoInscrits = Utilisateurs::all();
        $infotrajet = trajet_utilisateurs::all();
        
        return view('administration.generaleVue',[
            
            'infosH'=>$infosH ,
            'infosF'=>$infosF ,
            'infoInscrits'=> $infoInscrits,
            'infotrajet'=> $infotrajet,
        ]) ;
    }
}
