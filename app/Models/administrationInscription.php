<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as basiqueusauthenticatable;
class administrationInscription extends Model implements  Authenticatable
{
    use basiqueusauthenticatable ;
    use HasFactory;
    protected  $fillable = ['nom','prenom' ,'email','photo_profile','mot_de_passe','confirmation_mot_de_passe'];
    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->mot_de_passe;
    }
    
    
}
