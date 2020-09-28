<?php
  if(isset($_GET['p']) AND !empty($_GET['p']))
  {
    if($_GET['p'] == 'connexion')
    {?>
      <form action="#" method="post">

        <div class="form-group row">
          <div class="col-lg-3">
            <label for="email">Adresse email</label>
          </div>
          <div class="col-lg-9">
            <input name="email" type="text" class="form-control" id="email" placeholder="Enter votre email">
          </div>
        </div>

        <div class="form-group row">
          <div class="col-lg-3">
            <label for="password">Mot de passe</label>
          </div>
          <div class="col-lg-9">
            <input name="password" type="password" class="form-control" id="password" placeholder="Enter votre mot de passe">
          </div>
        </div>

        <button type="submit" name="post" class="btn btn-primary" value="login">Se connecter</button>

      </form>
    <?php
    }
  }
?>
