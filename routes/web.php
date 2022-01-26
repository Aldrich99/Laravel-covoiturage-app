<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\abonnementcontroller;
use App\Http\Controllers\alertController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\modificationPasswordController;
use App\Http\Controllers\newMessageController;
use App\Http\Controllers\supprimerTrajetController;
use App\Http\Controllers\updatePlacesRestantController;
use App\Http\Controllers\updateUtilisateursController;
use App\Http\Controllers\dashbordController\dashbordController;
use App\Http\Controllers\dashbordController\generaleVueController;
use App\Http\Controllers\dashbordController\messagerieAdminController;
use App\Http\Controllers\dashbordController\statistiqueAdminController;
use App\Http\Controllers\dashbordController\utilisateurController;
use App\Http\Controllers\dashbordController\adminPortailController;
use App\Http\Controllers\dashbordController\parametre;

Route::get('/', function () {
    return view('index');
});

    
 Route::get('/inscription' , "App\Http\Controllers\InscriptionController@InscriptionController");
 Route::post('/inscription', "App\Http\Controllers\InscriptionController@InsersionUtilisateurs");
 
 Route::get('/enregistrement' , "App\Http\Controllers\EnregistrementController@EnregistrementController");
 Route::post('/enregistrement' , "App\Http\Controllers\EnregistrementController@ValidationComptes");
 
 
 Route::get('/connexion' , "App\Http\Controllers\ConnexionController@ConnexionController");
 Route::post('/connexion' , "App\Http\Controllers\ConnexionController@AuthConnexion");
 
  Route::post('/abonnement' , [abonnementcontroller::class , 'abonnementcontroller'] );
 

  Route::get('/politique' , "App\Http\Controllers\politiqueController@politiqueController");
  Route::get('/conditionDutilisation' , "App\Http\Controllers\conditionDutilisationController@conditionDutilisation");
  
  Route::get('/a-propos' , "App\Http\Controllers\aproposController@aproposController");
  Route::get('/faq' , "App\Http\Controllers\questionController@questionController");
  
  Route::get('/modificationPassword' , [modificationPasswordController::class , 'modificationPassword']);
  Route::get('/modificationPassword' , [modificationPasswordController::class , 'modificationPasswordValidation']);
  
  
  
  
  
 Route::Group([
     'middleware' => 'App\Http\Middleware\Authmiddleware' ,
 ], function () {
     
     Route::get('/newMessage' , [newMessageController::class , 'messageRecue'] );
     Route::post('/newMessage' ,[newMessageController::class , 'reponsesMessageEnvoyer'] );
     
     Route::get('/nouveauMessage' , [newMessageController::class , 'nouveauMessage'] );
     Route::post('/nouveauMessage' , [newMessageController::class , 'nouveauMessagePost'] );
     
     Route::get('/msgSupprimer' , [newMessageController::class , 'msgSupprimer'] );
     
     Route::get('/msgSys' , [newMessageController::class , 'msgSys'] );
     
     
     Route::get('/proposer' , "App\Http\Controllers\ProposerTrajetController@ProposerTrajetController");
     Route::post('/proposer' , "App\Http\Controllers\ProposerTrajetController@EnregistrementTrajet");
     
     Route::get('/messagerie' , "App\Http\Controllers\messagerieController@messagerieController");
     
     Route::get('/payementForm' , "App\Http\Controllers\payementFormController@payementFormController");
     
     Route::get('/rechercher' , "App\Http\Controllers\RechercherController@RechercherController");
     Route::post('/rechercher' , "App\Http\Controllers\RechercherController@RechercheTrajet");
     
     Route::get('/userCprofile' , "App\Http\Controllers\userCprofileController@userCprofileController");
     
     Route::get('ajoutPanier/{conducteur}' , "App\Http\Controllers\ajoutPanierController@ajoutPanier");
     
     Route::get('/payement' , "App\Http\Controllers\payementController@payementController");
     
     Route::get('/payementMethode' , "App\Http\Controllers\payementMethodeController@payementMethodeController");
     
     Route::get('/confirmationtrajet' , "App\Http\Controllers\confirmationtrajetController@confirmationtrajetController");
     
     Route::get('/historique' , "App\Http\Controllers\historiqueController@historiqueController");
     
     Route::get('/profile' , "App\Http\Controllers\profileController@profileController");
     
     
     Route::get('/deconnexion' , "App\Http\Controllers\deconnexionController@deconnexionController");
     
     
     Route::get('updatePlacesRestant' , [updatePlacesRestantController::class , 'updatePlacesRestant']);
     Route::post('profileUpdate' , [updateUtilisateursController::class , 'misesAjoursUtilisateurs']);
     
     Route::get('deleteTrajet/{id}' , [supprimerTrajetController::class , 'supprimerTrajet']);
     Route::get('client' , [clientController::class , 'client']);
     Route::get('alerte' , [alertController::class , 'alert']);
     
     
     
     Route::get('dashbord' , [dashbordController::class , 'dashbord']);
     
     
     Route::get('utilisateurs' , [utilisateurController::class , 'allUsers']);
     Route::get('messagerieAdmin' , [messagerieAdminController::class , 'messagerieAdmin']);
     Route::get('statistiqueAdmin' , [statistiqueAdminController::class , 'statistique']);
     Route::get('generaleVue' , [generaleVueController::class , 'generaleVue']);
     Route::get('parametre' , [parametre::class , 'parametre']);
     
 });
 

 
//  Route::get('InscriptionAdmin' , [adminPortailController::class , 'adminInscription']);
//  Route::post('adminInscriptionValidation' , [adminPortailController::class , 'adminInscriptionValidation']);
 
 Route::get('ConnexionAdmin' , [adminPortailController::class , 'ConnexionAdmin']);
 Route::post('ConnexionAdmin' , [adminPortailController::class , 'ConnexionAdminValidation']);

 Route::get('DeconnexionadminPortail' , [adminPortailController::class , 'DeconnexionadminPortail']);
 
 
 

 
 
  
