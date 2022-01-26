@extends('globalCode.Layoute')
@section('contenu')
@include('Menu.Menubar')
<div class="container-fluid"  style="background: white;white;padding-bottom: 90px;" >
  <div class="row">
    <div class="col-lg-7 col-sm-12" >
    
 



   <div class="col-md-6 offset-md-3">
                    <span class="anchor" id="formPayment"></span>

                    <!-- form card cc payment -->
                    <div class="card card-outline-secondary">
                        <div class="card-body">
                            <h3 class="text-center">Paiement par carte de crédit</h3>
                            <hr>
                            <div class="alert alert-info p-2 pb-3">
                                <a class="close font-weight-normal initialism" data-dismiss="alert" href="#"><samp>×</samp></a> 
                                CVC code is required.
                            </div>
                            <form class="form" role="form" autocomplete="off">
                                <div class="form-group">
                                    <label for="cc_name">Nom du titulaire de la carte</label>
                                    <input type="text" class="form-control" id="cc_name" pattern="\w+ \w+.*" title="Nom et prénom" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Numéro de la carte</label>
                                    <input type="text" class="form-control" autocomplete="off" maxlength="20" pattern="\d{16}" title="Numéro de carte de crédit" required="required">
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-12">Date Exp. carte</label>
                                    <div class="col-md-4">
                                        <select class="form-control" name="cc_exp_mo" size="0">
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control" name="cc_exp_yr" size="0">
                                            <option>2018</option>
                                            <option>2019</option>
                                            <option>2020</option>
                                            <option>2021</option>
                                            <option>2022</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" autocomplete="off" maxlength="3" pattern="\d{3}" title="Trois chiffres au dos de votre carte" required="required" placeholder="CVC">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-12">Amount</label>
                                </div>
                                <div class="form-inline">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">FCFA</span></div>
                                        <input type="text" class="form-control text-right" id="exampleInputAmount" placeholder="39">
                                        <div class="input-group-append"><span class="input-group-text">.00</span></div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <button type="reset" class="btn btn-default btn-lg btn-block">Annuler</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-success btn-lg btn-block">Valider</button>
                                    </div>
                                    
                                                <script
														src="https://www.paypal.com/sdk/js?client-id=AUrcsE5q-4uDNLAxgiNi0_NBxKa7pGqd303buJEyqfm_PnSqG8YHgWVqOBl0hVCRjskSdjDVGHMNVB7O">
              
                										// Obligatoire. Remplacez YOUR_CLIENT_ID par votre ID client sandbox.    
             
              									</script>
              									<div id="paypal-button-container">Valider2</div>
              
                                              <script>
                                            
                                                paypal.Buttons().render('#paypal-button-container');
                                                // This function displays Smart Payment Buttons on your web page.
                                              
                                            </script>
              
              
              
              
              
              
              
  
  
                                </div>
                            </form>
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