<?php 
namespace  app\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as basiqueusauthenticatable;
class Utilisateurs extends  Model implements  Authenticatable{
    use basiqueusauthenticatable ;
    
    
    protected  $fillable = ['nom' ,
        'prenom',
        'email','date_de_naissance' ,
        'numero_de_telephone' ,
        'mot_de_passe',
        'confirmation_mot_de_passe',
        'politique',
        'photo_profile','sexe'];
    
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



?>