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
    <title>Page de Profil</title>
</head>

<body>

    <?php include("includes/header.php") ?>

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
                    <li class="listContent my-3">Liste des sujets :
                        <ul class="row p-0 m-0 my-3">
                            <li class="col-12 col-md-2">
                                <a href="#">topic 1</a>
                            </li>
                            <li class="col-12 col-md-2">
                                <a href="#">topic 2</a>
                            </li>
                            <li class="col-12 col-md-2">
                                <a href="#">topic 3</a>
                            </li>
                            <li class="col-12 col-md-2">
                                <a href="#">topic 4</a>
                            </li>
                            <li class="col-12 col-md-2">
                                <a href="#">topic 5</a>
                            </li>
                            <li class="col-12 col-md-2">
                                <a href="#">topic 6</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </section>
        <section class="col-12 col-md-3 imgProfile_Block">
            <div class="usernameBlock">
                <h2 class="username"><?= $user["username"]?></h2>
            </div>
            <div class="imgBlock">
                <img src="img/kirby.png" alt="image profile">
            </div>
        </section>
    </div>

</body>

</html>
