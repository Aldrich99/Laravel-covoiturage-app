@foreach($messageRecue as $recue)
 <div class="details">
       <div class="accordion " >
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-toggle="collapse" data-target="#{{$recue->id}}" aria-expanded="false" >
                <i class="h4 navbar-brand text-dark TitreMessage">Message de {{$infos_destinataire->nom}}<span class="badge badge-primary"> 1</span> </i>
              </button>
            </h2>
            <div id="{{$recue->id}}" class="accordion-collapse collapse" >
              <div class="accordion-body">
              <!--Debut Message -->
                <div class="title">Sujet du message : {{$recue->sujet}}<a> </a></div>
                <div class="header">
                  <img class="avatar" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                  <div class="from">
                    <span> {{$infos_destinataire->nom}} {{$infos_destinataire->prenom}}</span>
                    {{$infos_destinataire->email}}
                  </div>
                  <div class="date">Today, <b>3:47 PM</b></div>
                </div>
                <div class="content">
                 
                  <blockquote>
						{{$recue->message}}
                  </blockquote>
                </div>
    
                <form action="/newMessage" method="post" >
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
            
            <!-- Fin message -->
            
            </div>
          </div>
        
        </div>
    </div>
</div>

@endforeach

<style>

.TitreMessage:hover{
    text-decoration: underline;

}

</style>