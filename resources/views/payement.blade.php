@extends('globalCode.Layoute')
@section('contenu')
@include('Menu.Menubar')
<div class="container-fluid"  style="background: white;white;padding-bottom: 90px;" >
  <div class="row">
    <div class="col-lg-7 col-sm-12" style="padding-right: 40px;padding-left: 40px;">
			<div class="col" style="padding-left: 20px" >
        		<div class="row rounded" style="margin-top: 100px;">
        			<div class="card" style="width: 600px;box-shadow: 3px 3px 3px 3px #888888;">
                      <div class="card-body card-element">
                        <div class="col"><h5 class="card-title text-center">Payement</h5></div>
                          <div class="row">
                          		<div class="col">Nom</div>
                          </div>
                          <div class="row">
                          		
                      			<div class="col">
                      				<div class="d-flex " >
                      					<div class="col">Depart </div>
                      					<div class="col">Nom </div>
                      					<div class="col">Heure </div>                     				
                      				</div>
                      			</div>                            	
                      	  </div>
                      	  
                      	   <div class="row">
                      			<div class="col">
                      				<div class="d-flex">
                      					<div class="col">Arriver </div>
                      					<div class="col" >Nom </div>
                      				</div>                     				
                      			</div>                            	
                      	  </div>
                      	  
                      	   <div class="row">
                      			<div class="col">
                      				<div class="d-flex">
                      					<div class="col">Nombre de place</div>
                      					<div class="col"> 2 </div>
                      				</div>                      				
                      			</div>                            	
                      	  </div>
                      	  
                      	   <div class="row">
                      			<div class="col">
                      				<div class="d-flex">
                      					<div class="col">Prix</div>
                      					<div class="col"> 100 fcfa</div>
                      				</div>                     				
                      			</div>                            	
                      	  </div>
                      	  
                      	   <div class="row">
                      			<div class="col">
                      				<div class="d-flex">
                      					<div class="col">Commission</div>
                      					<div class="col"> 25 FCFA</div>
                      				</div>                     				
                      			</div>                            	
                      	  </div>
                      	  
                      	   <div class="row">
                      			<div class="col">
                      				<div class="d-flex">
                      					<div class="col">Total </div>
                      					<div class="col" >120 FCFA</div>
                      				</div>                     				
                      			</div>                            	
                      	  </div>
                      	  
                      	   <div class="row">
                      			<div class="col">
                      				<div class="d-flex">
                      					<div class="col">Mode de paiement</div>
                      					<div class="col">
                      					    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">                     					
                      						<label class="form-check-label" for="defaultCheck1">Cash </label>
                                         
                      					</div>
                      					<div class="col">
                      					    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">                     					
                      						<label class="form-check-label" for="defaultCheck1">Carte banquaire</label>
                                         
                      					</div>
                      				</div>                     				
                      			</div>                            	
                      	   </div>
                      	  
                      	   <div class="row">
                            	<div class="col-lg-12" >
                            		<a href="#" class="btn btn-danger pull-right">Valider</a>
                            	</div>     
                           </div>                     	  
                    </div>
        		</div>
	   		</div> 	   		
    </div>
 </div>
 
 
  <div class="col-lg-5 col-sm-12 ">
     <div class="container">
     	<img alt="" src="{{url('img/card.png')}}" width="400px" height="400px" style="padding-top: 50px;margin-top: 100px;">
     </div>
  </div>
 
 
 
</div>

<div class="row pt-4">    
    <div class="col ">
    	
    	<div class="d-flex pull-right " style="padding-right: 50px;">
        	<div class="pr-2" style="padding-right: 10px;">    	
            	<button class="btn p-0">
            		 <img alt="" src="{{url('img/app.jpg')}}" width="150px" height="40px">
            	</button>      	
        	</div>
            <div>
            
                <button class="btn p-0">
                		 <img alt="" src="{{url('img/app.jpg')}}" width="150px" height="40px">
                </button>   
            
            </div>
    	</div>
    
    </div>
</div>


</div>

@include('footer.footer2')
@endSection