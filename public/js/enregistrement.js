   jQuery().ready(function() {


 var v = jQuery("#myform").validate({
          rules: {
	
            confirmCompte: {
              	required: true,              
            	},
			
          },
		  
		messages:{
			 confirmCompte: {
              	required: "Saisie le code de confirmation",              
            	},
		
			},
			
          errorPlacement: function(error,element){
				if(element.attr("name")=="confirmCompte"){
					error.insertAfter($(element));
				}		
		}
        });


   
        $("#confirmCompte").click(function() {
          if (v.form()) {
            return true;
          }else{
			return false;
			}
        });
});
















