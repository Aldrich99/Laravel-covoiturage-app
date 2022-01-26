<?php

namespace App\Http\Controllers\dashbordController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\messageEnvoiClientConducteurs;

class messagerieAdminController extends Controller
{
    public function messagerieAdmin(){
        $messages = messageEnvoiClientConducteurs::all();
        return view('administration.messagerieAdmin',['messages'=>$messages]);
    }
}
