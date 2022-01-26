<table class="table table-dark">
  <thead>
    <tr>
    	<th>ID</th>
    	<th>Nom</th>
   		<th>Prenom</th>
   		<th>Email</th>
   		<th>Date de naissance</th>
   		<th>Numero</th>
   		
   		<th>Date Inscriptions</th>
   		
    	<th>Derniere modification</th>
    </tr>
  </thead>
  @foreach($users as $users)
  <tbody>
    <tr class="table-active">
      <th>{{$users->id}}</th>
      <th>{{$users->nom}}</th>
      <th>{{$users->prenom}}</th>
      <th>{{$users->email}}</th>
      <th>{{$users->date_de_naissance}}</th>
      <th>{{$users->numero_de_telephone}}</th>
      <th>{{$users->created_at}}</th>
      <th>{{$users->updated_at}}</th>
    </tr>
  </tbody>
  @endforeach
</table>