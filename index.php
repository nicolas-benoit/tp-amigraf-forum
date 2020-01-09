<?php

include_once "src/category.php";
include_once "src/subcategory.php";
include_once "src/topic.php";

$categoryList = pullCategoryList();
foreach ($categoryList as $key => $category) {
    $categoryList[$key]["subcategories"] = pullSubcategoryList($category);
}
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
    <div class="d-flex">

          <div class="col-8 col-sm-5">
              <p style="padding: 10px;">Titre de la categorie</p>

          </div>
          <div class="col-2 text-right">
            <a href="ajout-categorie.php">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Ajouter une categorie
</button></a>
          </div>
          <div class="col-2 text-right">
            <button type="button" class="btn btn-danger">
  Supprimer la categorie
</button>
          </div>
            </div>

            <?php foreach ($categoryList as $category) { ?>
            <div class="blocategorie">
                <div class="titrecat">
                    <div style="padding: 10px;">
                        <p><?= $category["name"] ?></p>

                    </div>
                </div>

                <div class="row nopadding">
                    <?php foreach ($category["subcategories"] as $subcategory) { ?>
                    <a href="sub-categories.php?id=<?= $subcategory["id"] ?>">
                        <div class="col-12 blocsouscat">
                            <p class="tittresouscat"><?= $subcategory["name"] ?></p>
                            <p class="font-13">Lorem ipsum dolor sit amet, labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                    </a>
                    <?php } ?>
                </div>

            </div>
            <?php } ?>
        </main>
    </div>
    <?php include("includes/footer.php") ?>

</body>
</html>
