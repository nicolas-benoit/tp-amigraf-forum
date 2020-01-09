<?php
include_once "src/user.php";
include_once "src/session.php";
if (checkIfConnected()) {
  $user = pullUser($_SESSION["connectedUser"]);
}
 ?>
<header>
  <div class="row nopadding">
    <div class="col-3">
      <div class="logo">
          <div class="mt-10">
        <a href="index.php"><img width="40%" src="img/logo-avengers.png" alt=""></a>
          </div>

      </div>
    </div>
    <div class="col-7">
      <div class="menu">
        <nav>
          <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="avengers.php">Les avengers</a></li>
            <!--<li><a href="faq.php">FAQ</a></li>-->
            <li><a href="members.php">Membres</a></li>
            <!--<li><a href="contact.php">Contact</a></li>-->
          </ul>
        </nav>
      </div>
    </div>
    <div class="col-2">
      <div class="menu">
        <nav>
          <div class="row mt-1 float-right mr-1">
            <?php if (isset($_SESSION['connectedUser'])): ?>
              <a href="profilepage.php?id=<?= $_SESSION['connectedUser'] ?>"><button class="btn-success p-2 m-1" style="border: 0">Hey ! <?= $user["username"] ?></button></a>
              <a href="logout.php"><button class="btn-danger p-2 m-1" style="border: 0">Se déconnecter</button></a>
            <?php endif; ?>

          </div>


        </nav>
    </div>
  </div>


</header>
