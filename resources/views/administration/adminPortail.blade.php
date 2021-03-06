<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
    <body>
      @include('flash::message')
    
            <section class="vh-100" style="background-color: #9A616D;">
              <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                  <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                      <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                          <img
                            src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/img1.jpg"
                            alt="login form"
                            class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
                          />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                          <div class="card-body p-4 p-lg-5 text-black">
            
                            <form action="/ConnexionAdmin" method="post">
            					{{csrf_field()}}
                              <div class="d-flex align-items-center mb-3 pb-1">
                                <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                <span class="h1 fw-bold mb-0"><img src="{{url('img/Nioudeme.png')}}" alt="" class="rounded-circle" width="200" height="200"></span>
                              </div>
            
                              <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Connecter vous a votre compte</h5>
            
                              <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example17">E-mail</label>
                                <input type="email"  name="email" id="form2Example17" class="form-control form-control-lg" />
                                
                              </div>
            
                              <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example27">Mot de passe</label>
                                <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" />
                                
                              </div>
            
                              <div class="pt-1 mb-4">
                                <button class="btn btn-dark btn-lg btn-block" type="submit">Valider</button>
                              </div>
            
                              <a class="small text-muted" href="#!">Mot de passe oublier ?</a>
                              <p></p>
                              <a href="/politique" class="small text-muted">Terms of use.</a>
                              <a href="/conditionDutilisation" class="small text-muted">Privacy policy</a>
                            </form>
            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
   
    </body>
</html>

