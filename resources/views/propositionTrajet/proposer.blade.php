@extends('globalCode.Layoute')
@section('contenu')
@include('Menu.Menubar')

<div class="container-fluid pt-5" style="background-color: white;padding-bottom: 150px">
    <div class="col-lg-10 mx-auto " style="background-color: #ecf0f5;">
    	<div class="row pt-4 pb-2 ps-4 pe-4" style="background: #383c45;color: white;"><span style="width: auto;"><a href="/client" style="color: white;" data-toggle="tooltip" data-placement="top" title="Retour au tableau de bord"><i class="fa fa-backward"></i></a></span><span  style="width: auto;" class="mx-auto text h3">PUBLIER UNE ANNONCE</span></div>
        <div class="row" style="background-color: #fdf5bd;color: black;"><span style="width: auto;" class="mx-auto p-4">Pour plus d'informations contacter l'administrateur dans votre messagerie !</span></div>        	
        	
        	<div class="row offset-1 p-5 "  > 
        	
        	<div class="col-lg-10 col-sm-12" style="padding-right: 40px;padding-left: 40px;">
                   <div class="panel-body">
                   
                       	<form action="/proposer"  method="post" id="basicform" name="basicform">
                       	{{csrf_field()}}
                       	<!-- Form 1 -->
							<div id="sf1" class="frm shadow p-4 rounded">  
								<div class="row "><h4>Quel est votre trajet aujourdhui?</h4> </div>
								<div class="row" > <!-- row 1 -->
    								<div class="col"><i class="text">Ville de depart</i></div>
                                    <div class="col">	
                                    <input list="VilleDepart" name="ville_depart" id="ville_depart" class="form-control" placeholder="Selectioner la ville de depart" required>
                                                <datalist id="VilleDepart">
                                                  <option value="Dakar">
                                                  <option value="Pikine">
                                                  <option value="Touba">
                                                  <option value="Guédiawaye">
                                                  <option value="Thiès">
                                                  <option value="Mbour">
                                                  <option value="Saint-Louis">
                                                  <option value="Rufisque">
                                                  <option value="Ziguinchor">
                                                  <option value="Diourbel">
                                                  <option value="Louga">
                                                  <option value="Tambacounda">
                                                  <option value="Mbacké">
                                                  <option value="Kolda">
                                                  <option value="Richard-Toll">
                                                </datalist> 
                                    </div>
								</div>
								
								 <p class="errorTxt" style="color: red;">
                                   @if( $errors->has('ville_depart') ) 
                                   {{$errors->first('ville_depart') }}			
                                   @endif
                                </p>
								<div class="row" > <!-- row 2 -->
                                    <div class="col"><i> Lieur de depart</i></div>
                                    <div class="col">	
                                    <input list="lieu_depart" name="lieu_depart" id="lieu_depart" class="form-control" placeholder="Selectioner le lieu de depart" required>
                                                <datalist id="lieu_depart">
                                                  <option value="liberte5">
                                                 
                                                </datalist> 
                                    </div>
              					</div>
              					<p>
                                   @if( $errors->has('lieu_depart') ) 
                                   {{$errors->first('lieu_depart') }}			
                                   @endif
                                </p>
              					<div class="row" >  <!-- row 3 -->
                                    <div class="col"><i> Ville d'arriver</i></div>
                                    <div class="col">	
                                        <input list="VilleArriver" name="ville_arriver" id="ville_arriver" class="form-control" placeholder="Selectionner la ville d'arriver" >
                                                <datalist id="VilleArriver">
                                                  <option value="Dakar">
                                                  <option value="Pikine">
                                                  <option value="Touba">
                                                  <option value="Guédiawaye">
                                                  <option value="Thiès">
                                                  <option value="Mbour">
                                                  <option value="Saint-Louis">
                                                  <option value="Rufisque">
                                                  <option value="Ziguinchor">
                                                  <option value="Diourbel">
                                                  <option value="Louga">
                                                  <option value="Tambacounda">
                                                  <option value="Mbacké">
                                                  <option value="Kolda">
                                                  <option value="Richard-Toll">
                                                  
                                                </datalist> 
                                    </div>               
          						</div>
          						<p>
                                  @if( $errors->has('ville_arriver') ) 
                                  {{$errors->first('ville_arriver') }}			
                                  @endif
                                </p>
          						<div class="row" > <!-- row 3 -->
                                    <div class="col"><i>Lieu d'arriver</i></div>
                                    <div class="col">	
                                        <input list="browsers" name="lieu_arriver" id="lieu_arriver" class="form-control" placeholder="Selectionner le lieu d'arriver" >
                                                <datalist id="browsers">
                                                  <option value="Liberter5">
                                                  
                                                </datalist> 
                                    </div>
                              </div>
                                <p>
                                   @if( $errors->has('lieu_arriver') ) 
                                   {{$errors->first('lieu_arriver') }}			
                                   @endif
                                </p>
                              <div class="row" > <!-- row 4 -->
                                    <div class="col"><i>Date de depart</i></div>
                                    <div class="col">	
                                        <input  name="date_depart" type="date" id="date_depart" class="form-control" placeholder="Selectionner la date de depart" >                                            
                                    </div>
                              </div>
                              <p>
                               	@if( $errors->has('date_depart') ) 
                                {{$errors->first('date_depart') }}			
                                @endif
                              </p>
          					  <div class="row" > 
                                    <div class="col"><i>Heure de depart</i></div>
                                    <div class="col">	
                                        <input  name="heure_depart" type="time" id="heure_depart" class="form-control" placeholder="Selectionner heure de depart" >                                          
                                    </div>
                                </div>
                                <p>
                                @if( $errors->has('heure_depart') ) 
                                {{$errors->first('heure_depart') }}			
                                @endif
                                </p>
          						<div class="row">
                                      <div class="col-lg-2 ms-auto col-lg-offset-2">
                                          <button class="btn btn-primary open1" type="button">Suivant <span ></span></button> 
                                       </div>
                                 </div>
          						
								
							</div> 
    						<!-- fin form 1 --> 
    						
    						<!-- debut form 2 -->  <!-- row 1 -->  
    						<div id="sf2" class="frm shadow p-4 rounded" style="display: none;"> 
        						<div class="row">
        						    <div><h4>Quelle taille de bagages accepter vous ?</h4></div>                           						
        						</div>
        						<div class="row">
            						<div class="d-flex">
            						
                						<div class="offset-1">
                                            <input class="form-check-input" name="bagages" type="checkbox" value="Bagages" id="bagages">
                                            <label class="form-check-label" for="defaultCheck1">
                                              <img alt="" src="{{url('img/luggage.png')}}" width="20px" height="20px" >
                                              Bagages
                                            </label>
                                        </div>
                              			<div class="offset-1">
                                            <input class="form-check-input" name="sac_main" type="checkbox" value="sac a main" id="sac_main">
                                            <label class="form-check-label" for="defaultCheck1">
                                              <img alt="" src="{{url('img/suitcase.png')}}" width="20px" height="25px" style="padding-bottom: 5px;">
                                              Sac a main
                                            </label>
                                         </div>
                                         
            						</div>
            						<p>
                                      @if( $errors->has('bagages') ) 
                                      {{$errors->first('bagages') }}			
                                      @endif
                                      
                                      @if( $errors->has('sac_main') ) 
                                      {{$errors->first('sac_main') }}			
                                      @endif
                                    </p>
            						<div class="row">
                                          <div><h4>Horaire de demarrage et autre options</h4></div>                    
                                    </div>
                                        <div class="row" > 
                                            <div class="col"><i>Vous etes fumeurs </i></div>
                                            <div class="col">	    
                                                <select name="fumeur" id="fumeur" class="form-select">
                                                    <option value="oui">Oui</option>
                                                    <option value="non">Non</option>
                                                    
                                                </select>
                                            </div>
                                         </div>
                                         <p>
                                          @if( $errors->has('fumeur') ) 
                                          {{$errors->first('fumeur') }}			
                                          @endif
                                         </p>
                                         <div class="row" > 
                                            <div class="col"><i> Vous etes handicaper </i></div>
                                            <div class="col">	                                 
                                                <select name="handicaper" id="handicaper" class="form-select">
                                                  <option value="oui">Oui</option>
                                                  <option value="oui">Non</option>                               
                                                </select>
                                            </div>
                                          </div>
                                          <p>
                                            @if( $errors->has('handicaper') ) 
                                            {{$errors->first('handicaper') }}			
                                            @endif                                              
                                            </p> 
                                          <div class="row" > 
                                                <div class="col"><i> Prix du voyage</i></div>
                                                <div class="col">	
                                                  <div class="input-group">
                                                        <input type="text" id="prix_voyages" name="prix_voyages" class="form-control" aria-label="FCFA" placeholder="Prix du voyage">
                                                        <span class="input-group-text">FCFA</span>                                     
                                                    </div>
                                                </div>
                                          </div>
                                          <p id="prix_voyage">
                                          @if( $errors->has('prix_voyages') ) 
                                          {{$errors->first('prix_voyages') }}			
                                          @endif
                                          </p>
                                         <div class="row">
                                            <div class="d-flex  col-lg-offset-2">
                                              <button class="btn btn-warning back2 " type="button"><span class="fa fa-arrow-left"></span> Retour</button> 
                                              <button class="btn btn-primary open2 ms-auto" type="button">Suivant<span class="fa fa-arrow-right"></span></button> 
                                            </div>                                              
                                         </div>
        						</div>
        						
    						</div>    
    						
    						<!-- fin form 2 --> 
    						
    						<!-- debut form 3 --> 
							<div id="sf3" class="frm shadow p-4 rounded" style="display: none;"> 							
						    	<div class="row" > <!-- row 1 -->
                                    <div class="col"><i> Numero de la plaque </i></div>
                                    <div class="col">	
                                      <input type="text" id="numero_plaque" name="numero_plaque" class="form-control" placeholder="Numero de la plaque">
                                    </div>
                         		</div>
                         		<p>
                                   	@if( $errors->has('numero_plaque') ) 
                                    {{$errors->first('numero_plaque') }}			
                                    @endif
                                </p>
                         		<div class="row" > <!-- row 2 -->
                                    <div class="col"><i> Nombre de place disponible</i></div>
                                    <div class="col">	
                                        <div class="input-group">
                                            <input type="text" id="nbre_places" name="nbre_places" placeholder="Nombre de place disponible" class="form-control" aria-label="FCFA">
                                            <span class="input-group-text error_place">Place</span>
                                        
                                        </div>
                                    </div>
                                </div>
                                <p>
                                  @if( $errors->has('nbre_places') ) 
                                  {{$errors->first('nbre_places') }}			
                                  @endif     
                                </p>
                         		<div class="row" > 
                                    <h3 >Un dernier mot avant de prendre la route </h3>
                                </div>
                                <div class="row mt-4">
                                  <textarea name="messages" class="form-control" placeholder="Ajouter des messages "></textarea>
                                </div>
							     <div class="row">
                                    <div class="d-flex col-lg-offset-2">
                                      <button class="btn btn-warning back3 " type="button">Retour</button> 
                                      <button class="btn btn-primary open3 ms-auto" type="submit">valider</button> 
                                    </div>
                           		</div>
    						</div>
    						<!-- fin  -->
                       	</form>
                   
                   </div>
                
         	  </div>
        
        	</div>    	
    </div>
</div>
<style>

.circle-tile {
    margin-bottom: 15px;
    text-align: center;
}
.circle-tile-heading {
    border: 3px solid rgba(255, 255, 255, 0.3);
    border-radius: 100%;
    color: #FFFFFF;
    height: 80px;
    margin: 0 auto -40px;
    position: relative;
    transition: all 0.3s ease-in-out 0s;
    width: 80px;
}
.circle-tile-heading .fa {
    line-height: 80px;
}
.circle-tile-content {
    padding-top: 50px;
}
.circle-tile-number {
    font-size: 26px;
    font-weight: 700;
    line-height: 1;
    padding: 5px 0 15px;
}
.circle-tile-description {
    text-transform: uppercase;
}
.circle-tile-footer {
    background-color: rgba(0, 0, 0, 0.1);
    color: rgba(255, 255, 255, 0.5);
    display: block;
    padding: 5px;
    transition: all 0.3s ease-in-out 0s;
}
.circle-tile-footer:hover {
    background-color: rgba(0, 0, 0, 0.2);
    color: rgba(255, 255, 255, 0.5);
    text-decoration: none;
}
.circle-tile-heading.dark-blue:hover {
    background-color: #2E4154;
}
.circle-tile-heading.green:hover {
    background-color: #138F77;
}
.circle-tile-heading.orange:hover {
    background-color: #DA8C10;
}
.circle-tile-heading.blue:hover {
    background-color: #2473A6;
}
.circle-tile-heading.red:hover {
    background-color: #CF4435;
}
.circle-tile-heading.purple:hover {
    background-color: #7F3D9B;
}
.tile-img {
    text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.9);
}

.dark-blue {
    background-color: #34495E;
}
.green {
    background-color: #16A085;
}
.blue {
    background-color: #2980B9;
}
.orange {
    background-color: #F39C12;
}
.red {
    background-color: #E74C3C;
}
.purple {
    background-color: #8E44AD;
}
.dark-gray {
    background-color: #7F8C8D;
}
.gray {
    background-color: #95A5A6;
}
.light-gray {
    background-color: #BDC3C7;
}
.yellow {
    background-color: #F1C40F;
}
.text-dark-blue {
    color: #34495E;
}
.text-green {
    color: #16A085;
}
.text-blue {
    color: #2980B9;
}
.text-orange {
    color: #F39C12;
}
.text-red {
    color: #E74C3C;
}
.text-purple {
    color: #8E44AD;
}
.text-faded {
    color: rgba(255, 255, 255, 0.7);
}


</style>

<script src="{{url('js/jquery.validate.js')}}"></script>
@include('footer.footer2')
@endSection