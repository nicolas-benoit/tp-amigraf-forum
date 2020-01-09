<?php

include_once "src/user.php";
include_once "src/utils.php";

if (!isset($_GET["id"]) || intval($_GET["id"]) <= 0)
    redirect("404.php");

$user = pullUser($_GET["id"]);

if (empty($user))
    redirect("404.php");

$stat = pullUserStat($user);

session_start();
?>
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
              <p>Les informations sur <?= $user["username"] ?></p>


          </div>

        </div>
        <div class="row align-items-center">
          <div class="col-2 ml-5">
            <div class="imgBlock">
                <img src="img/kirby.png" alt="image profile">
            </div>
          </div>
          <div class="col-8 ml-5 pt-20">


                  <p class="font-16"><b>Email :</b> <?= $user["email"] ?></p>
                  <p class="font-16"><b>Rôle : </b><?= $user["role"] ?></p>
                  <p class="font-16"><b>Date d'inscription : </b><?= $user["date"] ?></p>
                  <p class="font-16"><b>Date de naissance :</b></p>
                  <p class="font-16"><b>Nombre de topics : </b><?= $stat["topic_count"] ?></p>
                  <p class="font-16"><b>Nombre de commentaires : </b><?= $stat["comment_count"] ?></p>
                            <ol>
                            <p class="font-16"><b>Sujet fait par <?= $user["username"] ?> : </b></p>
                            <a href=""><li>Sujet 1</li></a>
                            <a href=""><li>Sujet 2</li></a>
                            <a href=""><li>Sujet 3</li></a>

                            </ol>

    </div>

</body>

</html>
