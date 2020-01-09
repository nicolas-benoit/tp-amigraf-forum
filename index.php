<?php
session_start();

include_once "src/category.php";
include_once "src/subcategory.php";
include_once "src/topic.php";

$categoryList = pullCategoryList();
foreach ($categoryList as $key => $category) {
    $categoryList[$key]["subcategories"] = pullSubcategoryList($category);
}

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <meta charset="utf-8">
    <title>Bienvenue sur le forum des Avengers</title>
</head>

<body>
      <?php include("includes/header.php") ?>

    <div class="d-flex">

      <?php include("includes/sidebar.php") ?>
    <main>
    <div class="d-flex">
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
                        <div class="col-12">
                            <a href="sub-categories.php?id=<?= $subcategory["id"] ?>">
                                <div class="blocsouscat">
                                    <p class="tittresouscat"><?= $subcategory["name"] ?></p>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>

            </div>
            <?php } ?>
        </main>
    </div>
    <?php include("includes/footer.php") ?>

</body>
</html>
