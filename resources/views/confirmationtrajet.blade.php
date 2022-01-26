@extends('globalCode.Layoute')
@section('contenu')
@include('Menu.Menubar')
@include('banniere.IMGbanniere')
  <div class="container-fluid conteneur" style="position: absolute;bottom: 0px;top:50px;">  
  
       <div class="container " style="text-align: center;margin-top: 90px;">
       	<img alt="" src="{{url('img/like.png')}}" width="200px" height="200px" >       
       </div>
       
       <div>
       		<h2 style="text-align: center;color: white;">Confirmation</h2>
       
       </div>
       
       <div>
       	<h4 style="text-align: center;color: white;font: bold; font-weight: 40px">Proposition de trajet est prise en charge avec succes</h4>
       
       </div>
       
        <div class="row">
      		 <a class="btn btn-danger offset-5 col-2" style="color: white;" href="/client">Retourner au tableau de bord</a>
       </div>
       
       
</div>

<style>
.conteneur div{
    padding-top: 20px;
}
</style>

@include('footer.footer2')
@endSection 