<!doctype html>
<html lang="fr">
<head>

      <meta charset="utf-8">
      <title>Titre de la page</title>
      <link rel="stylesheet" href="{{url('/css/cssDashbord/style.css')}}">
      <script src="script.js"></script> 
          
   	  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <!------ Include the above in your HEAD tag ---------->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
      
</head>
<body class="home">

    <div class="container-fluid display-table ">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell pb-5" id="navigation" >
                <div class="logo">
                    <a href="home.html">
                    <img src="{{url('img/Nioudeme.png')}}" alt="" class="hidden-xs hidden-sm rounded-circle" width="200" height="200">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li><a href="/statistiqueAdmin" class="generaleVue"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Acceuil</span></a></li>
                        <li><a href="/generaleVue" class="statistiqueAdmin"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Statistique</span></a></li>
                        <li><a href="/messagerieAdmin" class="messagerieAdmin"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Messagerie</span></a></li>
                        <li><a href="/utilisateurs" class="utilisateurs"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Utilisateur</span></a></li>
                        <li><a href="/parametre" class="parametre"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Parametre</span></a></li>
                        <li class="pb-3"><a href="/a-propos"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">A-propos</span></a></li>
                    
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <div class="row">
                    <header>
                        <div class="row">
                            <div class="col-lg-7">
                             
                                <div class="search ">
                                    <input type="text" placeholder="Search" class="form-control">
                                </div>
                            </div>
                            <div class="col ps-5">
                                	<div class="d-flex" style="padding-left: 150px;">
                                		<div class="ps-2 pe-2"><i class="fa fa-envelope-square"></i></div>
                                		<div class="ps-2 pe-2"><i class="fa fa-bell"></i></div>
                                		<div class="ps-2 pe-2">
                                			<div class="dropdown">
                                              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                 Selectioner
                                              </button>
                                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="/parametre">Proile</a></li>
                                                <li><a class="dropdown-item" href="#">Modifier mot de passe</a></li>
                                                <li><a class="dropdown-item" href="/DeconnexionadminPortail">Deconnexion</a></li>
                                              </ul>
                                            </div>
                                		
                                		</div>
                                		
                                	</div>
                                    
                            </div>
                        
                        </div>
                    </header>
                </div>
                <div class="user-dashboard">
                    <h1 class="h1 ">Tableaux de bord</h1>
                    <div class="row mainActivity">
                    
    					
                    </div>
                </div>
            </div>
        </div>

    </div>



  
    
    <script type="text/javascript">
    
    
    $(document).ready(function(){
    	$(".utilisateurs").click(function(e){
        	e.preventDefault();
        	let route = $(this).attr("href") ;
        	$.get(route,function(datas){
        		$(".mainActivity").empty();
        		$(".mainActivity").html(datas);
        	});
    	});
    	
    	$(".messagerieAdmin").click(function(e){
        	e.preventDefault();
        	let route = $(this).attr("href") ;
        	$.get(route,function(datas){
        		$(".mainActivity").empty();
        		$(".mainActivity").html(datas);statistiqueAdmin
        	});
    	});
    	
    	$(".statistiqueAdmin").click(function(e){
        	e.preventDefault();
        	let route = $(this).attr("href") ;
        	$.get(route,function(datas){
        		$(".mainActivity").empty();
        		$(".mainActivity").html(datas);
        	});
    	});
    	
    	$(".generaleVue").click(function(e){
        	e.preventDefault();
        	let route = $(this).attr("href") ;
        	$.get(route,function(datas){
        		$(".mainActivity").empty();
        		$(".mainActivity").html(datas);
        	});
    	});
    	
    	$(".parametre").click(function(e){
    		e.preventDefault();
    		let route = $(this).attr('href');
    		$.get(route,function(datas){
        		$(".mainActivity").empty();
        		$(".mainActivity").html(datas);
        	});
    	});
    	
    
       
    });

    
    </script>

</body>
</html>





