<div class="row">

<div class="row ">
	<div class="ms-auto" style="width: auto;">
        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Envoyer un message
        </button>
        
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Envoyer un message </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="/messagerieAdmin" method="post">
                
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Email destinataire</label>
                      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                      <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
						<button class="btn btn-success">Envoyer</button>
                    </div>
                
                
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
              </div>
            </div>
          </div>
        </div>
	</div>
</div>

    <div class="row p-4 ps-5">  
        <table class="table table-dark">
          <thead>
            <tr>
            	<th>ID</th>
            	<th>Expéditeur du message</th>
           		<th>Destinataire</th>
           		<th>Sujet du Message</th>
           		<th>Message</th>
           		<th>Date envoie du message</th>
           		
            </tr>
          </thead>
          @foreach($messages as $messages)
          <tbody>
            <tr class="table-active">
              <th>{{$messages->id}}</th>
              <th>{{$messages->auth_envoyeur_numero}}</th>
              <th>{{$messages>numero_destinataire}}</th>
              <th>{{$messages->sujet}}</th>
              <th>{{$messages->message}}</th>
              <th>{{$messages->created_at}}</th>
            </tr>
          </tbody>
          @endforeach
        </table>
    
    </div>

</div>