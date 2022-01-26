<?php

namespace App\Http\Controllers;

use App\Models\abonnementcontrollers;
use Illuminate\Http\Request;

class abonnementcontroller extends Controller
{
    public function abonnementcontroller() {
        request()->validate([
            'email' => ['required','email']
        ]);   
        
        $client_ip = request()->ip();
        
        $var = abonnementcontrollers::create([
            'email_visiteurs'=>request('email'),
            'ip_client'=>$client_ip
        ]);
        
//         $curl = curl_init("ipinfo.io/154.124.91.?token=18afb67aaa98dd");
//         $datas = curl_exec($curl);    
//         if($datas===false){
//             $error = curl_error($datas);
            
//         }else{
            
//         }
        
        flash(" Votre abonnement est effectif!  Merci de recharger cette page web ")->success();
        return  back();
//         curl_close($curl);
        
       
    }
}
