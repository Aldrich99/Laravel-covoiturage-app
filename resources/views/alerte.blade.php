@extends('globalCode.Layoute')
@section('contenu')
@include('Menu.Menubar')

@extends('globalCode.Layoute')
@section('contenu')
@include('Menu.Menubar')
<div class="container-fluid pt-4" style="background-color: white;">
    <div class="col-lg-10 mx-auto " style="background-color: #ecf0f5;">
    	<div class="row p-4" style="background: #383c45;color: white;"><span style="width: auto;"><a href="/client" style="color: white;" data-toggle="tooltip" data-placement="top" title="Retour au tableau de bord"><i class="fa fa-backward"></i></a></span><span  style="width: auto;" class="mx-auto h3">Alert</span></div>
        <div class="row" style="background-color: #fdf5bd;color: black;"><span style="width: auto;" class="mx-auto p-4">Retrouver ici tout les informations de notre equipe !</span></div>        	
        	<div class="row offset-1 p-4" > 
        	
        	
                   <div class="mainZone" style="    background-color: #ecf0f5;">
    	

                        <fieldset class="fset-primary">
                            <div class="fieldWrap" id="alerts_newsletter_wrap">
                                <div class="cbWrap">
                                	 <input id="alerts_newsletter" name="newsletter" class="checkbox" type="checkbox" value="true" checked="checked"><input type="hidden" name="_newsletter" value="on"><label for="alerts_newsletter">Recevoir notre actualité</label>
                                </div>
                                <div>
        	                        <em class="text-justify">Nouvelles fonctionnalités, annonces de notre sympathique équipe...</em>
                                </div>
                            </div>
                            <div class="fieldWrap pt-2" id="alerts_declaration_wrap">
        	                        <div class="cbWrap">
        	                        	 <input id="alerts_declaration" name="declaration" class="checkbox" type="checkbox" value="true" checked="checked"><input type="hidden" name="_declaration" value="on"><label for="alerts_declaration">Déclarer mes covoiturages</label>
        	                        </div>
        	                        <div>
        		                        <em>Aidez notre  équipe à mesurer l'impact positif du site  : partager notres contenue avec votre entourage.</em>
        	                        </div>
        	                    </div>
                            <div class="fieldWrap" id="alerts_matching_wrap">
                            	<div>
                            		<label>Vos alertes covoiturage</label>
        	                        
                            	</div>
                            </div>
                        </fieldset>
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


@include('footer.footer2')
@endSection


@include('footer.footer2')
@endSection