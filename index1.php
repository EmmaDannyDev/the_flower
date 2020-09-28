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

    <!-- HEADER -->
    <?php include('view/header.html'); ?>

  <!-- NAV -->
    <div id="nav">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-white text-uppercase">
          <li class="breadcrumb-item"><a class="text-dark" href="#" onclick="nav('block_bouquet')" style="color: #ffbb4a !important;">Bouquet</a></li>
          <li class="breadcrumb-item"><a class="text-dark" href="#" onclick="nav('block_plante')">Plantes</a></li>
          <li class="breadcrumb-item"><a class="text-dark" href="#" onclick="nav('block_fleur')">Fleurs Séchées</a></li>
        </ol>
      </nav>
    </div>

    <hr>

    <div id="block_category">

      <div id="block_bouquet" class="category">
        <img src="view/assets/img/bouquets/1.jpg" alt="Bouquet" height="300px"/>
        <img src="view/assets/img/bouquets/2.jpg" alt="Bouquet" height="300px"/>
        <img src="view/assets/img/bouquets/3.jpg" alt="Bouquet" height="300px"/>
        <img src="view/assets/img/bouquets/4.jpeg" alt="Bouquet" height="300px"/>
        <img src="view/assets/img/bouquets/5.jpg" alt="Bouquet" height="300px"/>
        <img src="view/assets/img/bouquets/6.jpg" alt="Bouquet" height="300px"/>
      </div>

      <div id="block_plante" class="category">
        <img src="view/assets/img/plantes/1.jpg" alt="Plante" height="300px"/>
        <img src="view/assets/img/plantes/2.jpg" alt="Plante" height="300px"/>
        <img src="view/assets/img/plantes/3.jpg" alt="Plante" height="300px"/>
        <img src="view/assets/img/plantes/4.jpeg" alt="Plante" height="300px"/>
        <img src="view/assets/img/plantes/5.jpg" alt="Plante" height="300px"/>
        <img src="view/assets/img/plantes/6.jpg" alt="Plante" height="300px"/>
        <img src="view/assets/img/plantes/7.jpg" alt="Plante" height="300px"/>
        <img src="view/assets/img/plantes/8.jpg" alt="Plante" height="300px"/>
      </div>

      <div id="block_fleur" class="category">
        <img src="view/assets/img/fleurs_sechees/1.jpg" alt="Fleurs Sechees" height="300px"/>
        <img src="view/assets/img/fleurs_sechees/2.jpg" alt="Fleurs Sechees" height="300px"/>
        <img src="view/assets/img/fleurs_sechees/3.jpg" alt="Fleurs Sechees" height="300px"/>
      </div>

    </div>


    <!-- FOOTER -->
    <?php include('view/footer.html'); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script type="text/javascript" src="view/assets/js/nav.js"></script>
  </body>
</html>
