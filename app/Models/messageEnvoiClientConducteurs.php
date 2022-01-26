<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class messageEnvoiClientConducteurs extends Model
{
    use HasFactory;
    
    protected $fillable = [
        
        'auth_envoyeur_numero',
        'numero_destinataire',
        'sujet',
        'message' 
        
        
    ] ;
   
 
}
