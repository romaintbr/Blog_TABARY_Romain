<!-- Page Content -->
<div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5">Connexion</h1>
        {if isset($session_var.notifications)}
       
          <div class="alert alert-{$color_notification}?> alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              {$session_var.notifications.message}
                     </div>
                {/if}

          <?php } ?>
        <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <form action="connexion.php" method="post" enctype="multipart/form-data" id="form_connexion">

          <div class="form-group">
            <label for="email" class="col-form-label">Adresse Mail :</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Veuillez entrer votre adresse mail" value="" required>
          </div>

          <div class="form-group">
            <label for="mdp">Mot de Passe :</label>
            <input type="password" class="form-control" id="password" name="mdp" placeholder="Veuillez entrer votre mot de passe" value="" required>
          </div>

          <div class="form-group">
            <label for="souvenir">Garder ma session active </label>
            <input type="checkbox" name="souvenir" />
          </div>

          <button type="submit" class="btn btn-primary" name="submit" value="ajouter">Se connecter</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>