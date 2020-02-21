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
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <meta charset="utf-8">
    <title>Les avengers</title>
</head>

<body>
    <?php include("includes/header.php") ?>

    <div class="d-flex">

        <?php include("includes/sidebar.php") ?>
        <main>



                <div class="blocategorie">
                    <div class="titrecat">
                        <div style="padding: 10px;">
                            <p></p>
                        </div>
                    </div>
                    <div class="row nopadding">
                    <?php

                            $list = $db->query("SELECT COUNT(*) AS total FROM topics");
                            // $query = mysql_query($sql) or die;
                                  while($tableau = $list->fetch()){
                                      echo $tableau["total"];
                                    }
                                    $list = $db->query("SELECT COUNT(*) AS total FROM users WHERE is_deleted = 0");
                                    // $query = mysql_query($sql) or die;
                                          while($tableau = $list->fetch()){
                                              echo $tableau["total"];
                                            }
                                    $list = $db->query("SELECT COUNT(*) AS total FROM categories WHERE is_deleted = 0");
                                            // $query = mysql_query($sql) or die;
                                                  while($tableau = $list->fetch()){
                                                      echo $tableau["total"];
                                    }
                     ?>

                    </div>
                </div>

        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
