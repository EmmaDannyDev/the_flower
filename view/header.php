<header>

  <nav id="navbar_header_1" class="navbar navbar-fixed-top text-uppercase">
    <ul class="nav navbar-nav text-center">
      <li><a href="?p=accueil">Accueil</a></li>
      <li><a href="?p=contact">Contact</a></li>
    </ul>
  </nav>

  <img src="view/assets/img/logo.png" alt="Logo" width="250">

  <nav id="navbar_header_2" class="navbar navbar-fixed-top text-uppercase">
    <ul class="nav navbar-nav text-center">
      <?php
        if(!isset($_SESSION["user"]["login"]))
        {
          echo '<li><a href="?p=connexion">Connexion</a></li>
                <li><a href="?p=inscription">Inscription</a></li>';
        }
        else
        {
          echo '<li>'.$_SESSION["user"]["login"].'</li>
               <li><a href="?p=deconnexion">Déconnexion</a></li>';
        }
      ?>

      <!-- <li><a href="">FR</a> | <a href="">EN</a></li> -->
    </ul>
  </nav>

</header>
