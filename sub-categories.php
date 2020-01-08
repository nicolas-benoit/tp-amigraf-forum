<?php

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
              <a href="ajout-article.php">
              <button type="button" class="btn btn-secondary">
                Ajouter un article
              </button></a>
            </div>
            <div class="col-2 text-right">

            </div>
          </div>


        </div>

          <div class="row nopadding">

        <?php foreach ($topicList as $topic) { ?>
          <a class="topica" href="topic.php?id=<?= $topic["id"] ?>">
          <div class="col-12 blocsouscat">
            <div class="row">
              <div class="col-9">
                    <p class="tittresouscat"><?= $topic["name"] ?></p>
              </div>
              <div class="col-3">
                  Date : <?= $topic["date"] ?>
              </div>
            </div>
            <p class="font-13">Lorem ipsum dolor sit amet, labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          </div>
          <?php } ?>
        </a>
      </div>
    </main>
        </div>
        <?php include("includes/footer.php") ?>

  </body>
</html>
