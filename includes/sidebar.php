<?php
include_once "src/user.php";
include_once "src/session.php";

if (isset($_POST['connection'])) {
  if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {

    $user = ["username" => $_POST['username'], "password" => $_POST['password']];


    if (compareUser($user) == true) {
      addUserToSession(pullUserByUsername($user['username'])["id"]);
    } else {
      echo "Veuillez réessayer !";
    }
  }
} ?>

<aside>
  <div class="row" style="margin-bottom:5px;">
    <div class="col-6">
      <p>Se connecter</p>
    </div>
    <div class="col-6 text-right">
      <a class="register" href="register.php">S'inscrire</a>
    </div>
  </div>
  <form class="" action="index.php" method="post">
    <label for="pseudo">Votre pseudo</label>
    <input type="text" class="inputlogin" name="username" placeholder="Pseudo ou Mail">
    <label for="motdepass">Votre mot de passe</label>
    <input type="password" class="inputlogin" name="password" placeholder="Mot de passe">
    <div class="row">
      <div class="col-9 text-right">
        <input type="submit" class="inputsubmit" name="connection" value="Se connecter">
      </div>

    </div>

  </form>
  <div class="blocgauche">
    <h4>Titre de la categorie</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <img src="" width="100%" alt="">
  </div>
</aside>
