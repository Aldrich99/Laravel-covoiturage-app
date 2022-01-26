
 <div class="details">
      
    <form action="/nouveauMessage" method="post" >
    {{csrf_field()}}
        <div class="form-group">
        	<label class="h4">Sujet</label>
            <input class="form-control" type="text" id="sujet" name="sujet" placeholder="Sujet du message" >
        </div>
          
       <div class="form-group">
     		<label class="h4">Numero destinataire</label>
        	<input class="form-control" type="text" id="numero_destinataire" name="numero_destinataire" placeholder="Numero destinataire" >
       </div>
          
       <div class="form-group">
        	<textarea class="form-control" id="message" name="message" rows="12" placeholder="Saisie votre message ici..." required="required"></textarea>
       </div>
       <div class="form-group">
        	<button tabindex="3" type="submit" class="btn btn-success">Envoyer le message</button>
       </div>
       
</form>
           
</div>


<style>

.TitreMessage:hover{
    text-decoration: underline;

}

</style>