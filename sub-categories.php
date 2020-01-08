<?php

include_once "src/subcategory.php";
include_once "src/topic.php";

$subcategory = pullSubcategory($_GET["id"]);
$topicList = pullTopicList($subcategory);

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
          <div style="padding: 10px;">
              <p><?= $subcategory["name"] ?></p>


          </div>

        </div>

          <div class="row nopadding">

          <?php foreach ($topicList as $topic) { ?>
          <a href="topic.php?id=<?= $topic["id"] ?>">
          <div class="col-12 blocsouscat">
            <p class="tittresouscat"><?= $topic["name"] ?></p>
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
