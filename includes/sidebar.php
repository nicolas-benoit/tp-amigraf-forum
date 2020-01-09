<?php
include_once "src/user.php";
include_once "src/session.php";

$errorMessage = "";

if (isset($_POST['connection'])) {
  if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {
    $user = ["username" => $_POST['username'], "password" => $_POST['password']];
    if (compareUser($user) == true) {
      addUserToSession(pullUserByUsername($user['username'])["id"]);
    } else {
      $errorMessage = "Vos identifiant son incorrects !";
    }
  }
}
if (!checkIfConnected()) {
?>

<aside>
  <div class="row" style="margin-bottom:5px;">
    <div class="col-6">
      <p>Se connecter</p>
    </div>
    <div class="col-6 text-right">
      <a class="register" href="register.php">S'inscrire</a>
    </div>
  </div>
  <?php if (!empty($errorMessage)) { ?>
  <div class="alert alert-danger">
      <p><?= $errorMessage ?></p>
  </div>
  <?php } ?>
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
</aside>

<?php } ?>
