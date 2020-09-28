<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="view/assets/css/style.css">

    <title>The Flower</title>
  </head>
  <body>
    <?php session_start(); ?>

    <!-- INCLUDE MODEL -->
    <?php include('model/entity/User.class.php'); ?>
    <?php include('model/manager/UserManager.class.php'); ?>
    <?php include('model/Connection.class.php'); ?>

    <div id="main_container">

      <!-- HEADER -->
      <?php include('view/header.php'); ?>

      <!-- BODY -->
      <div class="container-fluid">
      <?php
      // print_r($_SERVER);

        if(isset($_GET['p']) AND !empty($_GET['p']))
        { ?>
          <div id="form">
         <?php
            if($_GET['p'] == 'connexion')
            {
              include('view/connexion.php');
            }
            if($_GET['p'] == 'inscription')
            {
              include('view/inscription.php');
            }
          ?>
          </div>
          <?php
        }
        else
        {
          ?>
          <div id="block_1" class="block">
            <!-- CATEGORY NAV -->
            <?php include('view/category_nav.php'); ?>
            <div id="block_category">

                <?php include('view/block_category_fleurs_dhivers.php'); ?>

                <?php include('view/block_category_fleurs_sechees.php'); ?>

                <?php include('view/block_category_fleurs_plantes_interieur.php'); ?>

            </div>
          </div>
          <?php
        }
        if (isset($_POST['post']) && $_POST['post'] == 'registration')
        {
          $user = new User;
          $donnees = array(
              'password'=> $_POST['password'],
              'email'=> $_POST['email'],
              'firstName' => $_POST['nom'],
              'lastName' => $_POST['prenom'],
              'address' => $_POST['adress'],
              'postalCode' => $_POST['cp'],
              'city' => $_POST['ville'],
          );
          $user->hydrate($donnees);
          $conn = new Connection();
          $db = $conn->getDb();

          $Manager = new UserManager($db);

          $Manager->create($user);
        }
        if (isset($_POST['post']) && $_POST['post'] == 'login')
        {
          $user = new User;
          $user->setEmail($_POST['email']);
          $user->setPassword($_POST['password']);

          $conn = new Connection();
          $db = $conn->getDb();
          $Manager = new UserManager($db);
          if($Manager->login($user))
          {
            $_SESSION["user"]["login"] = $user->getEmail();

            echo '<script language="javascript">
                    window.location.replace("/the_flower");
                  </script>
                  ';
          }
          else
          {
            echo "<div class='alert alert-danger' role='alert'>
                    This is a danger alert—check it out!
                  </div>";
          }
        }
        if (isset($_GET['p']) && $_GET['p'] == 'accueil')
        {
          echo '<script language="javascript">
                  window.location.replace("/the_flower");
                </script>
                ';
        }
        if (isset($_GET['p']) && $_GET['p'] == 'contact')
        {
          echo '<script language="javascript">
                  window.location.replace("/the_flower");
                </script>
                ';
        }
        if (isset($_GET['p']) && $_GET['p'] == 'deconnexion')
        {
          unset($_SESSION["user"]["login"]);
          echo '<script language="javascript">
                  window.location.replace("/the_flower");
                </script>
                ';
        }
        // if (isset($_GET['pa']) && $_GET['pa'] == 'panier')
        // {
        //   echo '<div class="glyphicon glyphicon-shopping-cart">
        //         </div>
        //         ';
        // }
      ?>

      </div>

      <!-- FOOTER -->
      <?php include('view/footer.php'); ?>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
      <script type="text/javascript" src="view/assets/js/nav.js"></script>
    </div>
  </body>
</html>
