<?php
session_start();

include_once "src/user.php";
include_once "src/session.php";
include_once "src/utils.php";

if (!isset($_GET["id"]) || intval($_GET["id"]) <= 0)
    redirect("404.php");

$user = pullUser($_GET["id"]);

if (empty($user))
    redirect("404.php");

$stat = pullUserStat($user);

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <meta charset="utf-8">
    <title>Page de <?= $user["username"] ?></title>
</head>

<body>

    <?php include("includes/header.php") ?>

    <div class="d-flex">
        <?php include("includes/sidebar.php") ?>
        <main>

          <div class="blocategorie">
                    <div class="titrecat">
                        <div style="padding: 10px;">
                            <p> Tout à propos de <?= $user["username"] ?></p>

                        </div>
                    </div>
                    <div class="row">


                <div class="col-12 col-md-8 ">

                            <?php if (isset($connectedUser) && $user["id"] == $connectedUser["id"]) { ?>
                                <h2 class="username">Vos informations</h2>
                            <?php } else { ?>
                                <h2 class="username"></h2>
                            <?php } ?>


                        <ul>
                            <li class="listContent my-3">Email : <?= $user["email"] ?></li>
                            <li class="listContent my-3">Rôle : <?= $user["role"] ?></li>
                            <li class="listContent my-3">Date d'inscription : <?= $user["date"] ?></li>
                            <li class="listContent my-3">Date de naissance :</li>
                            <li class="listContent my-3">Nombre de topics : <?= $stat["topic_count"] ?></li>
                            <li class="listContent my-3">Nombre de commentaires : <?= $stat["comment_count"] ?></li>
                      </ul>
                </div>
                <div class="col-12 col-md-3 ">

                        <?php // if (isset($connectedUser) && $user["id"] == $connectedUser["id"]) { ?>
                            <!-- <h2 class="username">Votre avatar</h2> -->
                        <?php // } else { ?>
                            <!-- <h2 class="username"><?= $user["username"] ?></h2> -->
                        <?php // } ?>

                    <div class="imgBlock">
                        <img src="img/kirby.png" alt="image profile">
                    </div>
                </div>
                    </div>
            </div>
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>


</html>
