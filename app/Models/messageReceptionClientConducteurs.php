<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class messageReceptionClientConducteurs extends Model
{
    use HasFactory;
    
    protected $filable = [
        'auth_receveur_numero' ,
        'numero_envoyeur',
        'sujet',
        'message'
        
    ] ;
    
}
