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

    <div class="row profilePage">
        <section class="col-12 col-md-8 contentProfile_Block">
            <div class="usernameBlock">
                <div class="usernameBlock">
                    <h2 class="username">Tout à propos de <?= $user["username"]?></h2>
                </div>
            </div>
            <div class="contentBlock">
                <ul>
                    <li class="listContent my-3">Email : <?= $user["email"] ?></li>
                    <li class="listContent my-3">Rôle : <?= $user["role"] ?></li>
                    <li class="listContent my-3">Date d'inscription : <?= $user["date"] ?></li>
                    <li class="listContent my-3">Date de naissance :</li>
                    <li class="listContent my-3">Nombre de topics : <?= $stat["topic_count"] ?></li>
                    <li class="listContent my-3">Nombre de commentaires : <?= $stat["comment_count"] ?></li>
            </div>
        </section>
        <section class="col-12 col-md-3 imgProfile_Block">
            <div class="usernameBlock">
                <h2 class="username"><?= $user["username"]?></h2>
            </div>
            <div class="imgBlock">
                <img src="img/kirby.png" alt="image profile">
            </div>
          </div>
          <!-- <div class="col-8 ml-5 pt-20">


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

    </div> -->

</body>

</html>
