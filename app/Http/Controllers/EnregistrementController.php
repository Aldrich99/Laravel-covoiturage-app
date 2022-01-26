<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnregistrementController extends Controller
{
   public function EnregistrementController() {
        
        return view('enregistrement');
    }
    
    public function ValidationComptes() {
        request()->validate([
            'confirmCompte'=>['required']
        ]);
    
        if ( request('confirmCompte') != "4578") {
            flash("Le code de confirmation est incorrect.Veuillez re-verifier et reesayer");           
            return back();            
        }
        
        return view('connexion');
        
    }
}
