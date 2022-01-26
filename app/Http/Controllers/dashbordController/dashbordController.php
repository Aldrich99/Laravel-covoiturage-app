<?php

namespace App\Http\Controllers\dashbordController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashbordController extends Controller
{
    public  function dashbord(){
        return view('administration.dashbord');
    }
}
