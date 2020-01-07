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
            <form class="" action="register.php" method="post">


              <input type="text" class="inputlogin" name="username" placeholder="Pseudo">
              <input type="email" class="inputlogin" name="email" placeholder="Votre adresse e-mail">
              <input type="password" class="inputlogin" name="password" placeholder="Votre mot de passe">

          </div>
          <div class="col-2">

          </div>

        </div>
        <div class="d-flex justify-content-center">
          <input type="submit" class="inputsubmit2" name="register" value="S'inscrire gratuitement">

        </div>
        </form>


      </div>
    </main>
  </div>
  <?php include("includes/footer.php") ?>
</body>

</html>

<?php
include "src/user.php";

if (isset($_POST['register'])) {
  if (isset($_POST['username']) && !empty($_POST['username'])) {
    $username = htmlspecialchars($_POST['username']);
    if (isset($_POST['email']) && !empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $email = htmlspecialchars($_POST['email']);
      if (isset($_POST['password']) && !empty($_POST['password'])) {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $toto = createUser($username, $email, $password, "User", date("Y-m-d H:i:s"));
        pushUser($toto);
      } else {
        echo "Le champ est vide ! Entrez un mot de passe !";
      }
    } else {
      echo "Le champ est vide ou mal remplit ! Entrez une adresse mail !";
    }
  } else {
    echo "Votre champ est vide ou mal remplit ! Entrez un nom !";
  }
}
