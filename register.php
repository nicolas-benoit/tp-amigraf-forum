<?php
session_start();

include_once "src/user.php";

$errorMessage = "";

if (isset($_POST['register'])) {
  if (isset($_POST['username']) && !empty($_POST['username'])) {
    $username = htmlspecialchars($_POST['username']);
    if (isset($_POST['email']) && !empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $email = htmlspecialchars($_POST['email']);
      if (isset($_POST['password']) && !empty($_POST['password'])) {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        if (empty(pullUserByUsername($username)) && empty(pullUserByEmail($email))) {
          $toto = createUser($username, $password, $email, "User", date("Y-m-d H:i:s"));
          pushUser($toto);
          header("Location: index.php");
        } else {
          $errorMessage = "Le nom d'utilisateur ou l'adresse email est déja utilisé !";
        }
      } else {
        $errorMessage = "Le champ est vide ! Entrez un mot de passe !";
      }
    } else {
      $errorMessage = "Le champ est vide ou mal remplit ! Entrez une adresse mail !";
    }
  } else {
    $errorMessage = "Votre champ est vide ou mal remplit ! Entrez un nom !";
  }
} ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <meta charset="utf-8">
  <title>S'inscrire</title>
</head>

<body>
  <?php include("includes/header.php") ?>

  <div class="d-flex">

    <?php include("includes/sidebar.php") ?>
    <main>
      <div class="blocategorie">
        <div class="titrecat">
          <div style="padding: 10px;">
            <p>Inscription</p>
          </div>

        </div>
        <div class="row align-items-center">
          <div class="col-8 ml-auto pt-20">
            <?php if (!empty($errorMessage)) { ?>
              <p class="alert alert-danger"><?= $errorMessage ?></p>
            <?php } ?>
            <form class="" action="register.php" method="post">

              <label for="pseudo2">Votre pseudo</label>
              <input type="text" class="inputlogin" name="username" placeholder="Pseudo" required>
              <label for="mail">Votre e-mail</label>
              <input type="email" class="inputlogin" name="email" placeholder="Votre adresse e-mail" required>
              <label for="password">Votre mot de passe</label>
              <input type="password" class="inputlogin" name="password" placeholder="Votre mot de passe" required>

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

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>


</html>