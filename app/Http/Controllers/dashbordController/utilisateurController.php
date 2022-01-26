<?php

namespace App\Http\Controllers\dashbordController;

use App\Http\Controllers\Controller;

use App\Models\Utilisateurs;

class utilisateurController extends Controller
{
    public function allUsers(){
         $users = Utilisateurs::all();
         
         return view('administration.utlisateursInformations', ['users'=>$users]);
    }
}
