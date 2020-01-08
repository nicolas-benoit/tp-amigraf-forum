
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

    <div class="flexaccueil">

      <?php include("includes/sidebar.php") ?>
      <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
      <div class="toast" style="position: absolute; top: 0; right: 0;">
        <div class="toast-header">
          <img src="..." class="rounded mr-2" alt="...">
          <strong class="mr-auto">Bootstrap</strong>
          <small>11 mins ago</small>
          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="toast-body">
          Hello, world! This is a toast message.
        </div>
      </div>
    </div>
    <main>
      <div class="blocaccueil">
        <div class="row">
          <div class="col-8">
            <h1>Bienvenue sur le forum</h1>
            <p>Lorem ipsum d'index.php'
olor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          </div>
            <div class="col-4">  <img src="https://media.giphy.com/media/PpeGK6edBWAxi/giphy.gif" width="100%" alt="">              </div>
      </div>
    </div>
      <div class="blocategorie">
        <div class="titrecat">
          <div class="row">


          <div class="col-8 col-sm-5">
              <p style="padding: 10px;">Titre de la categorie</p>

          </div>
          <div class="col-2 text-right">
            <a href="ajout-categorie.php">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Ajouter une categorie
</button></a>
          </div>
          <div class="col-2 text-right">
            <button type="button" class="btn btn-danger">
  Supprimer la categorie
</button>
          </div>
            </div>
        </div>

          <div class="row nopadding">

          <a href="sub-categories.php">
          <div class="col-12 blocsouscat">
            <p class="tittresouscat"> Titre de la sous categorie</p>
            <p class="font-13">Lorem ipsum dolor sit amet, labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          </div>
        </a>
          <div class="col-12 blocsouscat">
            <p class="tittresouscat"> Titre de la sous categorie</p>
            <p class="font-13">Lorem ipsum dolor sit amet, labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          </div>
          <div class="col-12 blocsouscat">
            <p class="tittresouscat"> Titre de la sous categorie</p>
            <p class="font-13">Lorem ipsum dolor sit amet, labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          </div>
          </div>
          <div class="row" style="padding: 10px;">
            <div class="col-9  text-right">
              <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
        Ajouter une sous categorie
        </button>
            </div>

          </div>

    </main>
        </div>
        <?php include("includes/footer.php") ?>

  </body>
  <script>
$('.toast').toast('show');
  </script>
</html>
