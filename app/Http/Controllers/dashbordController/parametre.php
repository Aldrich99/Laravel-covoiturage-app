<?php

namespace App\Http\Controllers\dashbordController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class parametre extends Controller
{
     function parametre()
    {
        return view('administration.parametre');
    }
    
}
