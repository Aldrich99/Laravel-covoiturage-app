<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    function ConnexionController() {
//                 $ip = request()->ip();
//                 $curl = curl_init("ipinfo.io/{$ip}?token=18afb67aaa98dd");
//                 curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//                 $datas = curl_exec($curl);
//                 if($datas===false){
                    
//                 }else{
//                     $decode = json_decode($datas,true);
//                      $pays = $decode['country'];
                    
//                     if ($pays != "SN") {
//                         flash("Vous devez etre sur le territoire senegalais pour beneficier de toute nos service")->success();
//                     }
                 
//                 }
         Return view('/connexion');
    }
    
    function AuthConnexion() {
        
        request()->validate([

            'telephone' =>['required'],
            'password' => ['required','min:4'],
     
        ]);
 
       $var = auth()->attempt([           
            'numero_de_telephone'=>request('telephone'),
            'password'=>request('password')
        ]);
        
       if ($var) {
           flash("Vous etes bien connecter a votre compte")->success();          
           return  redirect('/client');
       }else {
           flash("Probleme de connexion a votre compte. Rcommencez ou contacter l'administrateur du site .")->error();  
            return  back();
       }
        
    }
}
