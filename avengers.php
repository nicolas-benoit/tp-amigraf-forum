<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php include("includes/header.php") ?>

    <div class="d-flex">

      <?php include("includes/sidebar.php") ?>
    <main>
      <div class="blocategorie">
        <div class="titrecat">
          <div style="padding: 10px;">
              <p>Qui sommes nous?</p>


          </div>

        </div>
        <div class="row">
          <div class="col-2">

          </div>
          <div class="col-8 text-center">
          <h1>Les Avengers c'est quoi?</h1>
          <img src="img/avengers.png" width="60%" alt="">
            <p>Avengers ou Les Avengers : Le film au Québec et au Nouveau-Brunswick (Marvel's The Avengers) est un film de super-héros américain écrit et réalisé par Joss Whedon, sorti en 2012. Il se base sur l'équipe de super-héros du même nom (Les Vengeurs en français) apparaissant dans le comic book publié par Marvel Comics et constitue le sixième film de l'univers cinématographique Marvel (dont il clôt le premier arc, appelé « Phase I »).<br>

            Les interprètes des six Avengers sont Robert Downey Jr., Chris Evans, Chris Hemsworth, Scarlett Johansson, Jeremy Renner et Mark Ruffalo. Dans ce premier des quatre films de la série Avengers, Iron Man, Captain America, Thor, Hulk, Clint Barton et Natasha Romanoff doivent tenter de travailler en équipe afin d'empêcher le frère adoptif de Thor, Loki, d'envahir la Terre.<br>

            Le film reçoit des critiques positives de la plupart des critiques de cinéma et établit plusieurs records au box-office américain, parmi lesquels le meilleur premier week-end d'exploitation en Amérique du Nord. Le film est également le plus rapide à atteindre la somme de 1 milliard de dollars de recettes. Il récolte au total 1,519 milliards de dollars, faisant de lui un des plus grands succès au box-office. Le film sort en Blu-ray, Blu-ray 3D et en DVD le 29 août en France et le 25<br> septembre 2012 aux États-Unis.</p>
            <a href="https://fr.wikipedia.org/wiki/Avengers_(film)" target="_blank">Source : Wikipedia</a>
          </div>
        </div>


    </main>
        </div>
        <?php include("includes/footer.php") ?>

  </body>
</html>
