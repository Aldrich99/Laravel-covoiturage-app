<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class messagerieController extends Controller
{
    public function messagerieController(){ 
        return view('Messagerie.messagerie');
    }
}
