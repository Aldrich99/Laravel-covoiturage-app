 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid" >
    <a class="navbar-brand" href="#">
    
          <img src="{{url('img/Nioudeme.png')}}" alt="" class="rounded-circle" width="100" height="100">
    
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <div class="form-group has-search mx-auto">
        
  	  </div>
      
       <ul class="navbar-nav  mb-2 mb-lg-0" id="navul">
       <li class="nav-item ">
          <a class="nav-link " id="navbutton" aria-current="page" href="/">
             Acceuil
          </a>
        </li>
     
       
         <li class="nav-item">
          <a class="nav-link " id="navbutton" aria-current="page" href="/faq">
            Infos utiles
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link " id="navbutton" aria-current="page" href="/a-propos">
             A Propos
          </a>
        </li>
        
        <li class="nav-item pe-4">
          <a class="nav-link " id="navbutton" aria-current="page" href="/faq">
             FAQ
          </a>
        </li>
        
        

		@if(auth()->check())
		<li class="nav-item pt-2">
         	<div class="btn-group">
              <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Mon compte
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="/client">Mon tableaux de tabeaux</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item bg-warning" href="/proposer">Publier une annonce</a>
              </div>
            </div>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/deconnexion"  >
           <button class="btn btn-primary">Deconnexion</button>      
          </a>
        </li>

        @else

		<li class="nav-item">
          <a class="nav-link " href="/inscription"  >
           <button class="btn btn-danger">Creer un compte</button>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link " href="/connexion"  >
           <button class="btn btn-primary">Se connecter</button>      
          </a>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>