<?php

namespace App\Http\Controllers;


use App\Models\trajet_utilisateurs;
use app\Models\Utilisateurs;

class updateUtilisateursController extends Controller
{
    public function misesAjoursUtilisateurs(){
        
        request()->validate([
            'email'=>['sometimes'],
            'numero_telephone' => ['sometimes'],
            'password'=>['sometimes'],
//             'photo_profile'=>['sometimes','image']
        ]);
      
        if (request('email') != null ) {
            auth()->user()->update([
                'email'=>request('email'),
                
            ]);
        }else {
            
        }
        
        if (request('numero_telephone') != null ) {
            auth()->user()->update([                
                'numero_de_telephone'=>request('numero_telephone'),                
            ]);
        }else {
           
        }
        
        if (request('password') != null ) {
            auth()->user()->update([                
                'mot_de_passe'=>bcrypt(request('password')), 
                'confirmation_mot_de_passe'=>bcrypt(request('password')), 
            ]);
        }else {
            
        }
       
        if (request('photo_profile') != null ) {
            $path = request('photo_profile')->store('avatar' , 'public');
            
            trajet_utilisateurs::where('trajet_id' ,auth()->id())->update([
                'photo_profile'=>$path,
                
            ]);
            Utilisateurs::where('id' ,auth()->id())->update([
                'photo_profile'=>$path,
                
            ]);
        }else {
            
        }
        
        flash("Mise a jours effectuer avec succes.Recharger la page puis continuer")->success(); 
        
        return back();
        }

        
        
//         $numero_telephone = request('numero_telephone');
//         $email = request('email');
//         $password = request('password');
       
//         auth()->user()->update([
//             'email'=>$email ,
//             'numero_de_telephone'=>$numero_telephone ,
//             'password' =>$password
//         ]);
        
//         flash("Mise a jours effectuer avec succes")->success();
//         return back();
    

}
