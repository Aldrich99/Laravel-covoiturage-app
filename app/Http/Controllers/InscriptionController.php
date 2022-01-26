<?php

namespace App\Http\Controllers;

use App\Models\utilisateurs;
use Illuminate\Support\Facades\Mail;
use App\Mail\messageDeConfirmation;
use Symfony\Component\Console\Input\Input;
use App\Models\trajet_utilisateurs;
class InscriptionController extends Controller
{
    
   public function InscriptionController() {
        Return view('inscription');
    }
    
   public function InsersionUtilisateurs() {
        
        request()->validate([
            'nom' => ['required'],
            'prenom' => ['required'],
            'email'=>['required' , 'email'],
            'date_naissance'=>['required' , 'date'],
            'telephone' =>['required'],
            'password' => ['required','confirmed','min:4'],
            'password_confirmation'=>['required'],
            'politique'=>['required'],
            'user_sexe'=>['required']
        ]);
        $inscription= utilisateurs::create([
           'sexe'=>request('user_sexe'),
            'nom'=>request('nom'),
            'prenom'=>request('prenom'),
            'date_de_naissance'=>request('date_naissance'),
            'email'=>request('email'),
            'numero_de_telephone'=>request('telephone'),
            'mot_de_passe'=>bcrypt(request('password')),
            'confirmation_mot_de_passe'=>bcrypt(request('password_confirmation')),
            'politique'=>request('politique'),
            
        ]);
      
      if ($inscription) {
          Mail::to(request('email'))->send(new messageDeConfirmation);
      }else {
          flash("Un probleme est survenir lors de l'inscription.Reprenez votre inscription")->error();
          return  back();
      }
       
        
        
        return redirect ('/enregistrement');
        
    }
}
