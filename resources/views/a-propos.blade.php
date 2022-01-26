@extends('globalCode.Layoute')
@section('contenu')
@include('Menu.Menubar')


<div class="about">
  <h1>A Propos de nous</h1>
  <div class="col-lg-8 mx-auto">
  
   Sama-auto est une structure specialiser dans le domaine du covoiturage ; permettant ainsi à plus de 15 millions d'habitants dans le pays de partager des trajets.
   Sama-auto exploite les technologies modernes pour remplir les sièges vides sur les routes et mettre en relation des membres en quête de covoitureurs ou de trajets en bus,
   rendant le voyage plus économique, plus convivial et plus pratique. Écologique et privilégiant les relations humaines,
	
	C'est également un excellent moyen pour les personnes ayant des intérêts similaires de se réunir et de discuter. Vous rencontrez de nouvelles personnes et vous parlez de
	choses dont vous n'auriez peut-être pas parlé autrement dans votre covoiturage.  
  
  </div>
</div>
<div style="text-align:center" class="pt-5"><span class="h2">Notre équipe</span></div>

<div class="row m-0 p-5">
    	<div class="row">
        	<div class="col">
        		<div>
        			<p class="h4">Qui nous sommes ?</p>
                    <p class="lead">Etudiants en Science Technologie<br> Informatique a l'Universite Thomas <br>Sankara de Dakar.</p>
        		</div>
        	</div>
        	
        	<div class="col pt-3">
        		<div>
        			<p class="lead">
        			
        			Ce site est réalisé dans l'optique de l'obtention de notre licence en informatique aura pour fonction de 
        			mettre en évidence le covoiturage de nos jours et son importance dans la circulation.
        			</p>
        			<p class="lead h6">Pour toute informations supplémentaire que vous désirez, veuillez nous contacter à trajet de nos adresses ci-dessous.</p>	
        		</div>
        	</div>	
    	</div>
	
	
    	<div class="row pt-5 ">
          <div class="col">
            <div class="card">
              <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
              <div class="container">
                <h2>Aldrich Clement</h2>
                <p class="title">CEO & Developpeur web/app</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>Lawsonaldrich99@gmail.com</p>
                <p><button class="btn btn-primary">Contact</button></p>
              </div>
            </div>
          </div>
        
          <div class="col mb-xs-5">
            <div class="card">
              <img src="/w3images/team2.jpg" alt="Mike" style="width:100%">
              <div class="container">
                <h2>Amy Fall</h2>
                <p class="title">Art Director</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>AmyFall@example.com</p><br><br>
                <p><button class="btn btn-primary">Contact</button></p>
              </div>
            </div>
          </div>
        
          <div class="col">
            <div class="card">
              <img src="/w3images/team3.jpg" alt="John" style="width:100%">
              <div class="container">
                <h2>Philippe Gomis</h2>
                <p class="title">Designer</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>PhilippeGomis@example.com</p><br><br>
                <p><button class="btn btn-primary">Contact</button></p>
              </div>
            </div>
          </div>
          
           <div class="col">
            <div class="card">
              <img src="/w3images/team3.jpg" alt="John" style="width:100%">
              <div class="container">
                <h2>Aicha Ba</h2>
                <p class="title">Designer</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>AichaBa@example.com</p><br><br>
                <p><button class="btn btn-primary">Contact</button></p>
              </div>
            </div>
          </div>
          
        </div>
        
        <div class="row m-0 p-5">
        	<div class="container">
                <div class="d-flex">
                    <div class="">
                        <h3><span ><i class="fa fa-cog"></i></span> <b>Notre projet vous intéresse ?</b> Contactez-nous dès maintenant.</h3>
                    </div>
                    <div class="ms-4">
                        <button type="button" class="btn btn-primary site-btn" onclick="location.href='https://api.whatsapp.com/send?phone=221776606106&Salut laisser votre message' ">Nous contactez</button>
                    </div>
                </div>
    	   </div>
        </div>
</div>

 


<style>
.about {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

</style>


@include('footer.footer2')
@endSection

