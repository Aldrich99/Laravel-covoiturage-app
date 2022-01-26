@extends('globalCode.Layoute')
@section('contenu')
@include('Menu.Menubar')


<div class="container-fluid">

        <div class="row">   
            <div>
                <div class="jumbotron jumbotron-fluid">
                  <div class="container ">
                   <form action="">
                   
                        <h1 class="display-6">Posez une question ou parcourez les categories ci-dessous.</h1>
                        <p class="lead"><input type="search" name="question" class="form-control form-control-lg" placeholder=" Envoyer une question particulière"></p>
                   </form>
                  </div>
                </div>
            </div>       
        </div>
        
        <div class="row">
        	<div class="container d-flex">
        		<div class="col col-lg-4">
    				<div class="card">
    					<h6 class="card-header"> Categorie</h6>
                        
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex align-items-center active">
                                <i class="ion ion-md-sunny mr-15"></i> <a href="/conditionDutilisation" style="color: white; text-decoration: none;">Condition d'utilisation </a><span class="badge badge-light badge-pill ml-15">06</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <i class="ion ion-md-unlock mr-15"></i><a href="/politique" style="text-decoration: none; color: black;">Politique de confidentialiter</a><span class="badge badge-light badge-pill ml-15">14</span>
                            </li>
                          
                            <li class="list-group-item d-flex align-items-center">
                                <i class="ion ion-md-filing mr-15"></i><a href="/documentation" style="text-decoration: none; color: black;">Documentation</a><span class="badge badge-light badge-pill ml-15">27</span>
                            </li>
                        </ul>
                    </div>                     
        		</div>
        		
        		
        		
        		<div class="col">   			
                     <div class="accordion" id="accordionExample">
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 Général
                              </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                              
                                    <h4>1. Quels sont les moyens de paiement qui serons disponibles sur NIOUDEME ?</h4>
                                    <p class="light-text">Nous accepterons les paiements via cartes bancaires (VISA &amp; MasterCard) ou via paiement mobile (Orange Money,  , <a href="https://paydunya.com" target="_blank">PayDunya</a>, etc).</p><br>
                                    <h4>2. Quel est le niveau de s&eacute;curit&eacute; de la plateforme?</h4>
                                    <p class="light-text">Notre solution est 100% SECURIS&Eacute;E parce que:</p>
                                    <ul>
                                        <li>Toutes vos transactions sont enti&egrave;rement chiffr&eacute;es 256bits (reconnaissable entre autres au sigle https).</li>
                                        <li>Nous travaillons de concert avec les op&eacute;rateurs de t&eacute;l&eacute;phonie (Orange) et nos partenaires internationaux (Stripe, PayDunya) pour garantir la s&eacute;curit&eacute; des transactions bancaires.</li>
                                        <li>Nous ne stockons JAMAIS vos informations bancaires de paiement.</li>
                                        <li>Notre solution a &eacute;t&eacute; con&ccedil;ue par des experts, doctorants en s&eacute;curit&eacute; informatique et test&eacute;e sous toutes ses coutures. Vous pouvez dormir tranquille :).</li>
                                    </ul>
                                    <p class="light-text">Nous utilisons les normes et les meilleures pratiques de l&apos;industrie pour fournir un syst&egrave;me robuste, convivial et s&eacute;curis&eacute;. Vous pouvez nous faire confiance.</p><br>
                                    <h4>3. Comment contacter l&apos;organisateur de mon &eacute;v&egrave;nement?</h4>
                                    <p class="light-text">Sur la page de l&apos;&eacute;v&egrave;nement, vous trouverez les coordonn&eacute;es de l&apos;organisateur. Si malgr&eacute; plusieurs tentatives, vous ne parvenez pas &agrave; entrer &agrave; contact avec cet organisateur, vous pouvez joindre le service client de NIOUDEME  &agrave; l&apos;adresse suivante <a href="mailto:contact@NIOUDEME .fr">contact@NIOUDEME.sn</a>.</p><br>
                                    <h4>4. Comment contacter le service client?</h4>
                                    <p class="light-text">Pour toute question relative &agrave; l&apos;&eacute;v&egrave;nement, veuillez contacter l&apos;organisateur dudit &eacute;v&egrave;nement. Pour toute autre question, vous pouvez joindre le service client de NIOUDEME  &agrave; l&apos;adresse suivante <a href="mailto:contact@NIOUDEME.sn?Subject=Support en ligne NIOUDEME ">contact@NIOUDEME.sn</a>.</p>
                                    <p class="light-text"><br></p><br>
                                
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Quels sont les moyens de paiement acceptés ?

                              </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                             <div class="article-body"><p>NIOUDEME vous propose six moyens&nbsp;de paiement différents :&nbsp;</p>
                                    <ul>
                                    <li><span style="line-height: 1.5;">V</span><span style="line-height: 1.5;">isa</span></li>
                                    <li><span style="line-height: 1.5;">Orange Money</span></li>
                                    <li>Mastercard</li>
                                    <li><span style="line-height: 1.5;">Paypal</span></li>
                                    <li><span style="line-height: 1.5;">Porte-monnaie en ligne&nbsp;</span></li>
                                    </ul>
                                    <p>&nbsp;</p></div>
                            </div>
                          </div>
                          <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Annule un billet
                                  </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">                        
                            		<h4>5. Que faire si vous rencontrez des problèmes durant l'achat des billets?</h4>
                                    <p class="light-text">
                					Contactez-nous sans aucune entrave si vous rencontrez des problèmes durant la procédure d'achat de billets.<br>
                					Email: <a href="mailto:contact@NIOUDEME.sn?Subject=Support en ligne NIOUDEME ">contact@NIOUDEME.sn</a>. Nous sommes toujours à votre service.
                					</p>
                					<h4>9. Suis-je obligé(e) d'imprimer le billet?</h4>
                					<p class="light-text">
                    					Vous n'êtes pas obligé d'imprimer le billet si vous avez un smartphone. Vous pouvez présenter votre QRCode lors de la validation des billets. Les QRCodes peuvent être facilement analysés afin de vous permettre d'accéder à l'événement.
                    				</p>                            
                       		 </div>
                          </div>
                       
                      </div>
        		</div>
        	</div>
        </div>

</div>



@include('footer.footer2')
@endSection