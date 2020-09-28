<?php
  if(isset($_GET['p']) AND !empty($_GET['p']))
  {
    if($_GET['p'] == 'inscription')
    {?>
      <form action="?p=connexion" method="post">

        <div class="form-group row">
          <div class="col-lg-3">
            <label for="nom">Nom</label>
          </div>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="nom" placeholder="Enter votre nom" name="nom" required>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-lg-3">
            <label for="prenom">Prénom</label>
          </div>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="prenom" placeholder="Enter votre prenom" name="prenom" required>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-lg-3">
            <label for="adress">Adresse</label>
          </div>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="adress" placeholder="Enter votre adresse" name="adress" required>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-lg-3">
            <label for="cp">Code Postale</label>
          </div>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="cp" placeholder="Enter votre code postale" name="cp" required>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-lg-3">
            <label for="ville">Ville</label>
          </div>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="ville" placeholder="Enter votre ville" name="ville" required>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-lg-3">
            <label for="email">Adresse email</label>
          </div>
          <div class="col-lg-9">
            <input type="email" class="form-control" id="email" placeholder="Enter votre email" name="email" required>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-lg-3">
            <label for="password">Mot de passe</label>
          </div>
          <div class="col-lg-9">
            <input type="password" class="form-control" id="password" placeholder="Enter votre mot de passe" name="password" required>
          </div>
        </div>

        <button type="submit" name="post" class="btn btn-primary" value="registration">S'inscrire</button>

      </form>
    <?php
    }
  }
?>
