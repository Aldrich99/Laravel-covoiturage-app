@extends('globalCode.Layoute')
@section('contenu')
@include('Menu.Menubar')
<div class="container-fluid pt-5" style="background-color: white;padding-bottom: 150px">
    <div class="col-lg-10 mx-auto " style="background-color: #ecf0f5;">
    	<div class="row p-4" style="background: #383c45;color: white;"><span  style="width: auto;" class="mx-auto ">RECHERCHER UN TRAJET</span></div>
    	<div class="row" style="background-color: #fdf5bd;color: black;"><span style="width: auto;" class="mx-auto p-4">Trouver votre trajet en un clique !</span></div>        	
    	
        	<div class="row offset-1 p-5 "  > 
        	
                    			<div class="col-10 "   >
                            		<div class="row " >
                            			<div class="card shadow" style="width: 600px;">
                                          <div class="card-body card-element">
                                            <div class="col-12"><h5 class="card-title text-center">Reserver ce trajet</h5></div>
                                              <div class="row">
                                              
                                             	<div class="col-6">
                                             		<div class="row">	
                                             			<div>                         		
                                             				<img  src="{{url('img/default-user.jpg')}}" class="rounded-circle" width="100px" height="100px">
                                                 		</div>                           	
                                                 		<div class="h6">                         		
                                                 			{{$infosConducteurSelectionner->nom}} {{$infosConducteurSelectionner->prenom}}
                                                 		</div>  
                                                 		<div class="h6">                         		
                                                 			{{$infosConducteurSelectionner->numero_de_telephone}}
                                                 		</div>       		
                                             		</div>       
                                             	</div>                      	   	
                                             	<div class="col-6 " >
                                             	
                                             		<div class="row" style="margin-top: 95px">
                                             			<div class="d-flex">
                                                 			<div class="h6">
                                                 				<span   >Heure de depart : </span>
                                                 			</div>
                                                 			<div class="h6">{{$trajetSelectionner->heure_depart}} </div>
                                                 		
                                             			
                                             			</div>
                                             		</div>                        	
                                            	
                                            	</div>
                                             
                                             <div class="row">
                                             	<div class="col-12 " style="text-align: center !important;">
                                             		<div class="pb-3"><span class="h6">Ville de depart : </span> <span class="h6">{{$trajetSelectionner->ville_depart}}</span></div>
                                             		<div  class=""><span class="h6">Ville a l'arriver : </span> <span  class="h6">{{$trajetSelectionner->ville_arriver}}</span></div>
                                             	</div>                         
                                             </div>
                                         <form action="/updatePlacesRestant" method="get">
                                             <div class="row mt-2">
                                             
                                             	<div class="col h6" >
                                             		Place a reserver
                                             	</div>
                                             	<div class="col" style="padding-right: 90px;">
                                             		<input type="number" class="form-control" placeholder="Nombre de passagers" name="nbresPassager" id="nbresPassager"  style="width: 195px;" required>
                                             	</div>
                                             	
                                             	
                                             </div>
                                             
                                              <div class="row mt-2">
                                             	<div class="col  h6">
                                             		Prix du trajet
                                             	</div>
                                             	<div class="col" style="padding-right: 90px;">
                                             		<button class="btn bg-primary disabled" style="width: 195px;">{{$trajetSelectionner->prix_voyages}}</button>
                                             	</div>
                                             </div>
                                             
                                             	<div class="row" style="padding-right: 90px;">
                                             		<input type="hidden" class="form-control" name="id" id="id"  style="width: 195px;" value="{{$trajetSelectionner->id}}" >
                                             	</div>
                                             	<div class="row" style="padding-right: 90px;">
                                             		<input type="hidden" class="form-control" name="nbre_places" id="nbre_places"  style="width: 195px;" value="{{$trajetSelectionner->nbre_places}}" >
                                             	</div>
                                              <div class="row">
                                             	
                                             	<div class="col-12 ">
                                             		<button class="btn btn-warning pull-right rounded" type="submit">Valider ce trajet</button>
                                             	</div>
                                             </div>
                                         </form>
                                                 
                                          </div>
                                        </div>
                            		</div>
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

@include('footer.footer2')
@endSection