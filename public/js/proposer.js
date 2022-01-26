   jQuery().ready(function() {

        // validate form on keyup and submit
        var v = jQuery("#basicform").validate({
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
			lieu_depart: {
              	required: "Saisie le lieu de depart",              
            	},
			ville_arriver: {
              	required: "Saisie la ville d'arriver ",              
            	},
			lieu_arriver: {
              	required: "Saisie le lieu d'arriver ",              
            	},
			date_depart: {
              	required: "Saisie la date de depart",              
            	},
			heure_depart: {
              	required: "Saisie l'heure de depart",              
            	},
			
			prix_voyages: {
              	required: "Veuillez saisie un montant",              
            	},
			numero_plaque: {
              	required: "Saisie le numero de la plaque",              
            	},
			nbre_places: {
              	required: "Saisie le nombre de place disponible",              
            	},
			},
			
          errorPlacement: function(error,element){
				if(element.attr("name")=="ville_depart"){
					error.insertAfter($(element));
				}else if(element.attr("name")=="lieu_depart"){
					error.insertAfter($(element));
				}else if(element.attr("name")=="ville_arriver"){
					error.insertAfter($(element));
				}else if(element.attr("name")=="lieu_arriver"){
					error.insertAfter($(element));
				}else if(element.attr("name")=="date_depart"){
					error.insertAfter($(element));
				}else if(element.attr("name")=="heure_depart"){
					error.insertAfter($(element));
				}else if(element.attr("name")=="prix_voyages"){
					error.insertAfter($("#prix_voyage"));
				}else if(element.attr("name")=="numero_plaque"){
					error.insertAfter($(element));
				}else if(element.attr("name")=="nbre_places"){
					error.insertAfter($(".error_place"));
				}			
		}
        });

        $(".open1").click(function() {
          if (v.form()) {
            $(".frm").hide("fast");
            $("#sf2").show("slow");
          }
        });

        $(".open2").click(function() {
          if (v.form()) {
            $(".frm").hide("fast");
            $("#sf3").show("slow");
          }
        });


        $(".back2").click(function() {
          $(".frm").hide("fast");
          $("#sf1").show("slow");
        });

        $(".back3").click(function() {
          $(".frm").hide("fast");
          $("#sf2").show("slow");
        });
      });
















