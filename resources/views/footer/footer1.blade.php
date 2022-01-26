  <!-- Footer Elements -->
  <div class="hero" style="padding-bottom: 40px ; padding-top: 40px" >
      <div class="container " >   
        <center>
    		 <form class="d-flex" action="/abonnement" method="post"  style="width:440px">
    		 {{csrf_field()}}
                <input class="form-control" type="email" placeholder="Abonnement a notre blog" name="email" required="required" >
                <button class="btn btn-primary" type="submit">Je m'abonne</button>
      		 </form>
        
        </center>
        </div>
  </div>
  <!-- Footer Elements -->