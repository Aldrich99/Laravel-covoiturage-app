   jQuery().ready(function() {

        // validate form on keyup and submit
        var v = jQuery("#searchform").validate({
          rules: {
	
            ville_depart: {
              	required: true,              
            	},
			lieu_depart: {
              	required: true,              
            	},
			ville_arriver: {
              	required: true,              
            	},
			lieu_arriver: {
              	required: true,              
            	},
			date_depart: {
              	required: true,              
            	},
			heure_depart: {
              	required: true,              
            	},
			Bagages:{
				required: false,   
			},
			sac_main:{
				required: false, 
			},
			fumeur:{
				required: false,
			},
			handicaper:{
				required: false,
			},
			prix_voyages: {
              	required: true,              
            	},
			numero_plaque: {
              	required: true,              
            	},
			nbre_places: {
              	required: true,              
            	},
          },
		  
		messages:{
			 ville_depart: {
              	required: "Saisie la ville de depart",              
            	},
		
			ville_arriver: {
              	required: "Saisie la ville d'arriver ",              
            	},
			
			date_depart: {
              	required: "Saisie la date de depart",              
            	},
			},
			
          errorPlacement: function(error,element){
				if(element.attr("name")=="ville_depart"){
					error.insertAfter($(element));
				}else if(element.attr("name")=="ville_arriver"){
					error.insertAfter($(element));
				}else if(element.attr("name")=="date_depart"){
					error.insertAfter($(element));
				
				}			
		}
        });

        $("#recherche").click(function() {
          if (v.form()) {
          	return true;
          }else{
			return false;
		  }
        });

     
      });
















