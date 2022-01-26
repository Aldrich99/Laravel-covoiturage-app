<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as basicAuth ;
class trajet_utilisateurs extends Model implements Authenticatable
{
    use HasFactory;
    use basicAuth ;
    
    protected  $fillable  = [
        'nom',
        'prenom',
        'numero_de_telephone',
        'email',
        'trajet_id',
        'ville_depart' ,
        'lieux_depart' ,
        'ville_arriver' ,
        'lieu_arriver' ,
        'date_depart' ,
        'heure_depart',
        'bagages',
        'sac_a_main',
        'fumeur' ,
        'handicaper',
        'prix_voyages',
        'numero_plaque',
        'nbre_places' ,
        'messages',
        
    ] ;
    
}
