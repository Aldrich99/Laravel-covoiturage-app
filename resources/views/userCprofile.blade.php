@extends('globalCode.Layoute')
@section('contenu')
@include('Menu.Menubar')
<div class="container-fluid"  style="background: white;white;padding-bottom: 90px;" >
	
  <div class="row">
    <div class="col-lg-7 col-xs-12" style="
    padding-right: 40px;
    padding-left: 40px;">
    
    	 
	    <div class="col-12 searchebaseinfo" >
    		<div class="row rounded" style="margin-top: 100px;">
    			<div class="col searcheprofil">
    				<img alt="" src="{{url('img/datas.png')}}" width="15px" height="15px" rounded>
    				<div class="text">Nom</div>
    			</div>
    			
    			<div class="col searcheinfos">
    				<div >Depart</div>
    				<div >Ariver</div>
    				<div >Nombre de Place</div>
    			</div>
    			<div class="col searcheevaluation">
    				<div>Date </div>
    				<div>Note </div>
    				<div><button Class="btn">Voir details</button></div>
    			</div>
    			
    		</div>
	    </div>  
	    
	    <hr>
 			  
    </div>
       
    <div class="col-lg-5">
       <div class="col-12 divformmaps " style="margin-left: 100px;padding-top: 85px;">
           <iframe style="border-radius: 10px ; border-color: #fbfbfb;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955909.5671896515!2d-16.762002817260576!3d14.473607945137552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec172f5b3c5bb71%3A0x5a46a55099615940!2zU8OpbsOpZ2Fs!5e0!3m2!1sfr!2ssn!4v1631021471926!5m2!1sfr!2ssn" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
       </div>  
    </div>

  </div>
 </div>



@include('footer.footer2')
@endSection