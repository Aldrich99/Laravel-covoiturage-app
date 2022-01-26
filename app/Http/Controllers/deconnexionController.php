<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class deconnexionController extends Controller
{
    public function deconnexionController(){
        
        
        auth()->logout();
        flash("Vous etes bien deconnecter")->success();
        return  redirect('/connexion');
    }
}
