
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
      <div class="blocaccueil">
        <div class="row">
          <div class="col-8">
            <h1>Bienvenue sur le forum</h1>
            <p>Lorem ipsum d'index.php'
olor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          </div>
            <div class="col-4">
              <img src="" alt="">
              </div>
      </div>
    </div>
      <div class="blocategorie">
        <div class="titrecat">
          <div class="row">


          <div class="col-8">
              <p style="padding: 10px;">Titre de la categorie</p>

          </div>
          <div class="col-2  text-right">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Ajouter une categorie
</button>
          </div>
          <div class="col-2 text-right">
            <button type="button" class="btn btn-secondary">
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
            <div class="col-3 text-right">
              <button type="button" class="btn btn-danger">
        Supprimer une sous categorie
        </button>
        </div>
          </div>

    </main>
        </div>
        <?php include("includes/footer.php") ?>

  </body>
</html>
