<?php

namespace App\Http\Controllers;

use App\Models\trajet_utilisateurs;
use app\Models\Utilisateurs;

class profileController extends Controller
{
    function profileController() {
        
        $profile= Utilisateurs::where('id' ,auth()->user()->id)->first();
        
        return  view('profile',['profile'=>$profile]);
        
                
    }
}

