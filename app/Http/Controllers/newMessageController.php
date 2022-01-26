<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\messageEnvoiClientConducteurs;
use App\Models\messageReceptionClientConducteurs;
use app\Models\Utilisateurs;

class newMessageController extends Controller{
    public function messageRecue(){       
        $messageRecue = messageEnvoiClientConducteurs::where('numero_destinataire' , auth()->user()->numero_de_telephone)->get();        
        $infos_destinataire= Utilisateurs::where('numero_de_telephone' , auth()->user()->numero_de_telephone)->first();       
        return view('message.reponsesMessage'  , [
            'messageRecue'=>$messageRecue,
            'infos_destinataire'=> $infos_destinataire           
        ]);
    }  
    public function reponsesMessageEnvoyer(){
       request()->validate([
            'sujet' => ['sometimes'],
            'numero_destinataire' => ['required'],
            'message' => ['required'],           
        ]);    
       messageEnvoiClientConducteurs::create([
           'auth_envoyeur_numero' => auth()->user()->numero_de_telephone,           
            'numero_destinataire' => request('numero_destinataire') ,
            'sujet'  => request('sujet'),
            'message'  => request('message')           
        ]);   
       flash("Message envoyer")->success();       
       return back();
 
    }
    public function nouveauMessage() {
        return view('message.NouveauMessage');
    }
    public function nouveauMessagePost() {
        request()->validate([
            'sujet' => ['sometimes'],
            'numero_destinataire' => ['required'],
            'message' => ['required'],
        ]);
        messageEnvoiClientConducteurs::create([
            'auth_envoyeur_numero' => auth()->user()->numero_de_telephone,
            'numero_destinataire' => request('numero_destinataire') ,
            'sujet'  => request('sujet'),
            'message'  => request('message')
        ]);
        flash("Message envoyer !")->success();
        return back();
        
    }

  
}
