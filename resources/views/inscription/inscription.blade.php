@extends('globalCode.Layoute')
@section('contenu')
@include('Menu.Menubar')
	<div class="page-content">
		<div class="form-v4-content">
			<div class="form-left">
				<h2>INFOMATIONS</h2>
				<p class="text-1">En cliquant sur le bouton « Soumettre »  vous acceptez les <a href="/politique" style="color: white;">CGUs</a> et attestez que vous avez plus de 18 ans. Pour exercer vos droits d'opposition, d'accès et de rectification, consultez nos <a href="/politique" style="color: white;">CGUs</a>.</p>
				<p class="text-2"><span>Note:</span> 
					N'utilisez pas deux fois la même adresse mail ou numéro de téléphone pour vous inscrit sur l'application web.
				<br>
				<br>
    				<span>1-</span><span>Ne pas envoyé de paiement sans avoir atteint votre destination.</span>
    			<br>
    				<span>2-</span><span>Ne pas envoyé de l'argent par des moyens de transfert d'argent.</span>
    			<br>
    				<span>3-</span><span>Que votre lieu de rendez-vous soit dans un lieu public et à une heure de passage.</span>
				 </p>
				<div class="form-left-last">
					<input type="submit" name="account" class="account" value="Vous avez deja un compte ?" style="width: auto !important;" onclick="location.href = '/connexion';">
				
				</div>
			</div>
			<form class="form-detail" action="/inscription" method="post" id="myform" enctype="multipart/form-data">
			{{csrf_field()}}
				<h2>Inscription</h2>
				<div class="form-group">
					<div class="form-row form-row-1">
						<label for="first_name">Nom</label>
						<input type="text" name="nom" id="first_name" class="input-text" required="required">						
					</div>
					<div class="form-row form-row-1">
						<label for="last_name">Prenom</label>
						<input type="text" name="prenom" id="last_name" class="input-text" required="required">
					</div>
				</div>
						<p>
    						@if( $errors->has('nom') ) 
        					{{$errors->first('nom') }}
        					
        					@endif
        					
        					@if( $errors->has('prenom') ) 
        					{{$errors->first('prenom') }}
        					
        					@endif
						</p>
				<div class="form-row">
					<label for="your_email">Email</label>
					<input type="email" name="email" id="your_email" class="input-text" required >					
				</div>
				
						<p>
							@if( $errors->has('email') ) 
        					{{$errors->first('email') }}
        					@endif
        				</p>
        				
				<div class="form-row">
					<label for="your_email">Date de naissance</label>
					<input type="date" name="date_naissance" id="date_naissance" class="input-text" required >
				</div>
						<p>
							@if( $errors->has('date_naissance') ) 
        					{{$errors->first('date_naissance') }}       					
        					@endif
        				</p>
				<div class="form-row">
					<label for="your_email">Numero de telephone</label> 	
					<input type="tel" name="telephone" id="telephone" class="input-text" required pattern="[0-9]{2}[0-9]{3}[0-9]{2}[0-9]{2}" placeholder="776606106">

				</div>
						<p>
        					@if( $errors->has('telephone') ) 
            				{{$errors->first('telephone') }}			
            				@endif
        				</p>
        				
        		<div class="form-row">
					<label for="browser">Votre sexe</label>
                    <input list="sexe" name="user_sexe" id="user_sexe">
                    
                    <datalist id="sexe">
                      <option value="Homme">
                      <option value="Femme">
                      
                    </datalist>
				</div>
				<p>
					@if( $errors->has('sexe') ) 
    				{{$errors->first('sexe') }}			
    				@endif
				</p>
        		
        				
				<div class="form-group">
					<div class="form-row form-row-1 ">
						<label for="password">Mot de passe</label>
						<input type="password" name="password" id="password" class="input-text" required>

					</div>
					
					<div class="form-row form-row-1">
						<label for="comfirm-password">Confirmation </label>
						<input type="password" name="password_confirmation" id="password_comfirmation" class="input-text" required>
					</div>
				</div>
				
				
					<p>
						@if( $errors->has('password') ) 
        				{{$errors->first('password') }}
        				@endif
        			
    					@if( $errors->has('password_confirmation') ) 
            			{{$errors->first('password_confirmation') }}
            			@endif
					</p>
			
				<div class="form-checkbox">
					<label class="container"><p>J'accepte les conditions <a href="#" class="text">Terms et Conditions</a></p>
					  	<input type="checkbox" name="politique" value="1" required="required">
					  	<span class="checkmark" style="top: 5px;"></span>
					</label>
				</div>
				<p>
						@if( $errors->has('politique') ) 
        				{{$errors->first('politique') }}
        				@endif
        			
					</p>
				
				
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Soumettre">
				</div>
			</form>
		</div>
	</div>
	
@include('footer.footer2')
	@endSection
