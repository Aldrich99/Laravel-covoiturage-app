
<div class="container-fluid pt-4" style="background-color: white;">
    <div class="col-lg-10 mx-auto " style="background-color: #ecf0f5;padding-left: 10px ; padding-right: 10px">
    	<div class="row p-4" style="background: rgb(18,33,67) ;color: white;"><span  style="width: auto;" class="mx-auto ">MON PROFILE</span></div>
        <div class="row" style="background-color: #fdf5bd;color: black;"><span style="width: auto;" class="mx-auto p-4">Modifier ou ajouter des information a votre profile !</span></div>        	
        	<div class="row offset-1 p-4" > 
        	
        	<div class="row">
        	<div class=" col-lg-4 mx-auto" >
        		<img  src="{{url('img/default-user.jpg')}}" class="rounded-circle " width="100px" height="100px">
        		     	
        	</div>        
        </div>
    
    	<div class="col">
    		<form action="/profileUpdate" method="post" enctype="multipart/form-data">
    		{{csrf_field()}}
    			<div class="row ">
    				<div class="col">
    				    <label for="inputtext" class="col-form-label">Nom</label>
    				
    					<input type="text" id="nom" name="nom" class="form-control disabled " placeholder="Saisie le nom" >
    				</div>
    				
    				<div class="col ">
    				    <label for="inputtext" class="col-form-label">Adresse Mail</label>
    				
    					<input type="text" id="email" name="email" class="form-control"  placeholder="Saisie une addresse mail">
    				</div>
    			</div>
    			
    			
    			<div class="row ">
    				<div class="col">
    					<label for="inputtext" class="col-form-label">Prenom</label>
    					<input type="text" id="prenom" name="prenom" class="form-control"  placeholder="Saisie le prenom">
    				</div>
    				
    				<div class="col ">
    					<label for="inputtext" class="col-form-label">Numero de telephone</label>
    					<input type="text" id="numero_telephone" name="numero_telephone" class="form-control"  placeholder="Saisie le numero">
    				</div>
    			</div>
    			<div class="row ">
    				<div class="col">
    					<label for="inputtext" class="col-form-label">Mot de passe</label>
    					<input type="text" id="password" name="password" class="form-control"  placeholder="Saisie le mot de passe">
    				</div>
    				
    				<div class="col">
    					<label for="inputtext" class="col-form-label">Photo de profil</label>
						<input type="file" name="photo_profile" id="photo_profile" class="form-control" >
    				</div>
    			</div>
    			
    			<div class="row">
    				<div class="col ">
    					<button class="btn btn-danger pull-right" style="color: white;" type="submit">Valider mes informations</button>
    				</div>
    				
    				
    			</div>
    		
    		
    		
    		
    		</form>
    	
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
<script type="text/javascript">

$(document).ready(function(){
            $("#nom").prop("disabled", true);
            $("#prenom").prop("disabled", true);
            
        })

</script>

