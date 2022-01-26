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
			<form class="form-detail" action="/enregistrement" method="post" id="myform">
			{{csrf_field()}}
				<h2>Validation du compte</h2>
				<div class="form-group">
					
				</div>
				
				<div class="form-group">
					<div class="form-row form-row-1 ">
						<label for="password">Mot de passe</label>
						<input type="text" name="confirmCompte" id="confirmCompte" class="input-text" >
					</div>
					
				</div>
				
				<p>
				@if( $errors->has('confirmCompte') ) 
				{{$errors->first('confirmCompte') }}
				@endif
				</p>
				
				<div class="form-row-last">
					<input type="submit"  value="Valider">
				</div>
			</form>
		</div>
	</div>
	<script src="{{url('js/jquery.validate.js')}}"></script>
	
@include('footer.footer2')
	@endSection
