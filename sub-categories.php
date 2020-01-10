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

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
          <div class="row m-0 p-0">
            <div class="col-12 col-md-6 blockTitle_topic">
              <p style="padding: 10px; width: 100%;"><?= $subcategory["name"] ?></p>
            </div>

            <?php if (isset($connectedUser)) { ?>
              <div class="col-12 col-md-6 text-right button_topic">
                <a class="btn btn-secondary" href="ajout-article.php?id=<?= $subcategory['id'] ?>">Ajouter un article</a>
              </div>
            <?php } ?>
          </div>


        </div>

        <div class="row nopadding">

          <?php foreach ($topicList as $topic) { ?>
            <div class="col-12">
              <a class="topica" href="topic.php?id=<?= $topic["id"] ?>">
                <div class="blocsouscat">
                  <div class="row m-0 p-0">
                    <div class="col-12 col-sm-6">
                      <p class="tittresouscat"><?= $topic["name"] ?></p>
                    </div>
                    <div class="col-12 col-sm-6">
                      Date : <?= $topic["date"] ?>
                    </div>
                  </div>
                </div>
            </div>
          <?php } ?>
          </a>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
