   <!-- Sign Up Start -->
   <div class="container-fluid">
       <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
           <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
               <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                   <div class="d-flex align-items-center justify-content-between mb-3">
                       <a href="index.html" class="">
                           <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Epidemia</h3>
                       </a>
                       <h3>Agent</h3>
                   </div>
                   <form action="accueil.php?url=userContoller&action=validerForm" method="post">
                       <div class="form-floating mb-3">
                           <input type="text" class="form-control" id="floatingText" placeholder="nom" name='nom'>
                           <label for="floatingText">Nom</label>
                       </div>
                       <div class="form-floating mb-3">
                           <input type="text" class="form-control" id="floatingText" placeholder="prénom" name='prenom'>
                           <label for="floatingText">Prénom</label>
                       </div>
                       <div class="form-floating mb-3">
                           <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name='email'>
                           <label for="floatingInput">E-mail</label>
                       </div>
                       <div class="form-floating mb-4">
                           <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name='password'>
                           <label for="floatingPassword">Password</label>
                       </div>

                       <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Ajouter</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
   <!-- Sign Up End -->