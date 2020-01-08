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
          <div style="padding: 10px;">
              <p>Inscription</p>


          </div>

        </div>
        <div class="row align-items-center">
          <div class="col-8 ml-auto pt-20">
                    <form class="" action="index.html" method="post">

                    <label for="pseudo2">Votre pseudo</label>
                    <input type="text" class="inputlogin" name="pseudo" placeholder="Pseudo" id="pseudo2">
                    <label for="mail">Votre e-mail</label>
                    <input type="mail" class="inputlogin" name="mail" placeholder="Votre adresse e-mail" id="mail">
                    <label for="password">Votre mot de passe</label>
                    <input type="password" class="inputlogin" name="password" placeholder="Votre mot de passe" id="password">

                        </form>
          </div>
          <div class="col-2">

          </div>

        </div>  <div class="d-flex justify-content-center">
            <input type="submit" class="inputsubmit2" name="register" value="S'inscrire gratuitement">

        </div>


      </div>
    </main>
        </div>
<?php include("includes/footer.php") ?>
  </body>
</html>
