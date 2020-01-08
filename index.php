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
    <title></title>
</head>

<body>
    <?php include("includes/header.php") ?>

    <div class="d-flex">

        <?php include("includes/sidebar.php") ?>
        <main>
            <div class="blocaccueil">
                <div class="row">
                    <div class="col-8">
                        <h1>Bienvenue sur le forum</h1>
                        <p>Lorem ipsum d'index.php'
                            olor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    </div>
                    <div class="col-4">
                        <img src="" alt="">
                    </div>
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
