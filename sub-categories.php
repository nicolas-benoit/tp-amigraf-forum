<?php
session_start();

include_once "src/subcategory.php";
include_once "src/topic.php";
include_once "src/utils.php";

if (!isset($_GET["id"]) || intval($_GET["id"]) <= 0)
  redirect("404.php");

$subcategory = pullSubcategory($_GET["id"]);
$topicList = pullTopicList($subcategory);

if (empty($subcategory))
    redirect("404.php");
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <meta charset="utf-8">
  <title><?= $subcategory["name"] ?></title>
</head>

<body>
  <?php include("includes/header.php") ?>

  <div class="d-flex">

    <?php include("includes/sidebar.php") ?>
    <main>
      <div class="blocategorie">
        <div class="titrecat">
          <div class="row">
            <div class="col-7">
              <p style="padding: 10px;"><?= $subcategory["name"] ?></p>
            </div>
            <div class="col-3  text-right">
              <button type="button" class="btn btn-danger">
                Supprimer la sous categorie
              </button>
            </div>
            <div class="col-2 text-right">
              <a class="btn btn-secondary" href="ajout-article.php?id=<?= $subcategory['id'] ?>">Ajouter un article</a>
            </div>
            <div class="col-2 text-right">

            </div>
          </div>


        </div>

        <div class="row nopadding">

          <?php foreach ($topicList as $topic) { ?>
            <div class="col-12">
              <a class="topica" href="topic.php?id=<?= $topic["id"] ?>">
                <div class="blocsouscat">
                  <div class="row">
                    <div class="col-9">
                      <p class="tittresouscat"><?= $topic["name"] ?></p>
                    </div>
                    <div class="col-3">
                      Date : <?= $topic["date"] ?>
                    </div>
                  </div>
                </div>
            </div>
          <?php } ?>
          </a>
        </div>

</html>
