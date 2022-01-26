<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class payementFormController extends Controller
{
    public function payementFormController(){ 
        return  view('payementForm');
    }
}
