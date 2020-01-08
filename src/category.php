<?php

include_once "database.php";

function createCategory($name, $date, $is_deleted = 0) {
    return [
        "id" => -1,
        "name" => $name,
        "date" => $date,
        "is_deleted" => $is_deleted
    ];
}

function pushCategory($category) {
    dbInit();
    $sql = "INSERT INTO categories(name,date) VALUES (:name,:date)";

    dbExecute($sql, [
        [":name", $category["name"], PDO::PARAM_STR],
        [":date", $category["date"], PDO::PARAM_STR]
    ]);
}

function pullCategory($id) {
    dbInit();
    $category = dbExecute("SELECT * FROM categories WHERE id=:id;", [[":id", $id, PDO::PARAM_INT]]);
    return $category[0];
}

function pullCategoryList() {
    dbInit();
    $categoryList = dbExecute("SELECT * FROM categories WHERE is_deleted=0;");
    return $categoryList;
}

function updateCategory($category) {
    dbinit();
    $sql = "UPDATE categories SET name=:name, date=:date WHERE id=:id;";

    dbExecute($sql, [
        [":id", $category["id"], PDO::PARAM_INT],
        [":name", $category["name"], PDO::PARAM_STR],
        [":date", $category["date"], PDO::PARAM_STR]
    ]);
}

function forgetCategory($category) {
    dbInit();
    $sql = "UPDATE categories SET is_deleted=1 WHERE id=:id";
    dbExecute($sql, [
        [":id", $category["id"], PDO::PARAM_INT]
    ]);
}

function categoryIsSendable($category) {
    $nameIsSet = isset($category["name"]) && !empty($category["name"]);
    $dateIsSet = isset($category["date"]) && !empty($category["date"]);

    return $nameIsSet && $dateIsSet;
}
