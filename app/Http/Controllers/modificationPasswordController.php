<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateurs;

class modificationPasswordController extends Controller
{
    function modificationPassword() {
        Return view('/modificationPassword');
        
    }
    
    function modificationPasswordValidation() {
        request()->validate([
            
            'telephone' =>['required'],
            'password' => ['required','min:4'],
            
        ]);
        
     
        if (request('telephone')!=null && request('password') != null) {
            Utilisateurs::where('numero_de_telephone' , request('telephone'))->update([
                'mot_de_passe'=> bcrypt(request('password')),
                'confirmation_mot_de_passe'=> bcrypt(request('password'))
            ]);
            
            flash("mot de passe modifier avec succes.Connecter vous avec votre nouveau mot de passe")->success();
            return view('connexion');
        }else {
            flash("Probleme de connexion")->error();
            return view('connexion');
        }
    }
}
