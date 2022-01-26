<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class conditionDutilisationController extends Controller
{
    public function conditionDutilisation(){
       
        return view('politique.conditionDutilisation');
    }
}
