<?php

namespace App\Http\Controllers\dashbordController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\administration;
use App\Models\administrationInscription;
use Illuminate\Support\Facades\Auth;
use App\Models\Utilisateurs;

class adminPortailController extends Controller 
{
    
    
    public function adminInscription() {

        return view('administration.adminInscription');
    }
//     public function adminInscriptionValidation() {
//                 request()->validate([
//                     'nom'=>['required'],
//                     'prenom'=>['required'],
//                     'email'=>['required'],
//                     'photo_profile'=>['required','image'],
//                     'password'=>['required','confirmed','min:4'],
//                     'password_confirmation'=>['required'],
//                 ]);
//                 $path = request('photo_profile')->store('avatar' , 'public');
//                $var = administrationInscription::create([
//                      'nom'=>request('nom'),
//                     'prenom'=>request('prenom'),
//                     'email'=>request('email'),
//                     'photo_profile'=>$path,
//                    'mot_de_passe'=> bcrypt(request('password') ),
//                    'confirmation_mot_de_passe'=>bcrypt(request('password_confirmation')),
                    
//                 ]);
                
//                if ($var) {
//                    flash("Vous etes bien connecter")->success();
//                    return view('administration.dashbord');
//                 }else {
//                     flash("Connecter vous avec vos identifiant valide")->error();
//                     return back();
//                 }
//     }

    
    public function ConnexionAdmin() {   
        return view('administration.adminPortail');
    }
    
    public function ConnexionAdminValidation() {
        request()->validate([
            'email'=>['required'],
            'password'=>['required','min:4'],
        ]);
        
        $admin = Utilisateurs::where('is_admin','=','2')->first();
        
        if ($admin->email != request('email')) {
            
            flash("Vous n'etes pas autoriser a voir cette page.Contactez l'administrateur pour plus d'information.Merci!")->error();
            return view('administration.adminPortail');
        }else {
            $con=  auth()->attempt([
                'email'=>request('email'),
                'password'=>request('password')
            ]);
            
           if ($con == true) {
               flash("Vous etes bien connecter")->success();
               return view('administration.dashbord');
           }
        }
 
    }
    
    
    public function DeconnexionadminPortail() {
        auth()->logout();
        return view('administration.adminPortail');
    }
 
        public function adminPortail() {           
            return view('administration.dashbord');
        }
}
