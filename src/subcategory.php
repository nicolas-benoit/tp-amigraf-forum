<?php

include_once "src/database.php";

function createSubcategory($name, $date, $is_deleted = 0) {
    return [
        "id" => -1,
        "name" => $name,
        "date" => $date,
        "is_deleted" => $is_deleted,

        "category_id" => -1
    ];
}

function pushSubcategory($subcategory) {
    dbInit();
    $sql = "INSERT INTO subcategories(name,date,category_id) VALUES (:name,:date,:category_id)";

    dbExecute($sql, [
        [":name", $subcategory["name"], PDO::PARAM_STR],
        [":date", $subcategory["date"], PDO::PARAM_STR],
        [":category_id", $subcategory["date"], PDO::PARAM_INT]
    ]);
}

function pullSubcategory($id) {
    dbInit();
    $subcategory = dbExecute("SELECT * FROM subcategories WHERE id=:id;", [[":id", $id, PDO::PARAM_INT]]);
    return $subcategory[0];
}

function pullSubcategoryList($category) {
    dbInit();
    $subcategoryList = dbExecute("SELECT * FROM subcategories WHERE is_deleted=0 AND category_id=:category_id ORDER BY date DESC;", [
        ["category_id", $category["id"], PDO::PARAM_INT]
    ]);
    return $subcategoryList;
}

function updateSubcategory($subcategory) {
    dbinit();
    $sql = "UPDATE subcategories SET name=:name, date=:date, category_id=:category_id WHERE id=:id;";

    dbExecute($sql, [
        [":id", $subcategory["id"], PDO::PARAM_INT],
        [":name", $subcategory["name"], PDO::PARAM_STR],
        [":date", $subcategory["date"], PDO::PARAM_STR],
        [":category_id", $subcategory["category_id"], PDO::PARAM_INT]
    ]);
}

function forgetSubcategory($subcategory) {
    dbInit();
    $sql = "UPDATE subcategories SET is_deleted=1 WHERE id=:id";
    dbExecute($sql, [
        [":id", $subcategory["id"], PDO::PARAM_INT]
    ]);
}

function linkCategoryToSubcategory($subcategory, $category) {
    $subcategory["category_id"] = $category["id"];
    return $subcategory;
}

function subcategoryIsSendable($subcategory) {
    $nameIsSet = isset($subcategory["name"]) && !empty($subcategory["name"]);
    $dateIsSet = isset($subcategory["date"]) && !empty($subcategory["date"]);
    $categoryIdIsSet = isset($subcategory["category_id"]) && !empty($subcategory["category_id"]);

    return $nameIsSet && $dateIsSet && $categoryIdIsSet;
}
