<?php

function createTopic($name, $content, $date, $is_deleted = 0) {
    return [
        "id" => -1,
        "name" => $name,
        "content" => $content,
        "date" => $date,
        "is_deleted" => $is_deleted,

        "subcategory_id" => -1,
        "user_id" => -1
    ];
}

function pushTopic($topic) {
    dbInit();
    $sql = "INSERT INTO topics(name,content,date,subcategory_id,user_id) VALUES (:name,:content,:date,:subcategory_id,:user_id)";

    dbExecute($sql, [
        [":name", $topic["name"], PDO::PARAM_STR],
        [":content", $topic["content"], PDO::PARAM_STR],
        [":date", $topic["date"], PDO::PARAM_STR],
        [":subcategory_id", $topic["subcategory_id"], PDO::PARAM_STR],
        [":user_id", $topic["user_id"], PDO::PARAM_STR]
    ]);
}

function pullTopic($id) {
    dbInit();
    $topic = dbExecute("SELECT * FROM topics WHERE id=:id;", [[":id", $id, PDO::PARAM_INT]]);
    return $topic[0];
}

function pullTopicList($amount = 20, $offset = 0) {
    dbinit();
    $sql = "SELECT * FROM topics WHERE is_deleted=0 ORDER BY date LIMIT :amount OFFSET :offset;";

    $topicList = dbExecute($sql, [
        [":amount", $amount, PDO::PARAM_INT],
        [":offset", $offset, PDO::PARAM_INT]
    ]);

    return $topicList;
}

function updateTopic($topic) {
    dbinit();
    $sql = "UPDATE topics SET name = :name, content = :content, date = :date,subcategory_id = :subcategory_id,user_id = :user_id WHERE id=:id;";

    dbExecute($sql, [
        [":id", $topic["id"], PDO::PARAM_INT],
        [":name", $topic["name"], PDO::PARAM_STR],
        [":content", $topic["content"], PDO::PARAM_STR],
        [":date", $topic["date"], PDO::PARAM_STR],
        [":subcategory_id", $topic["subcategory_id"], PDO::PARAM_STR],
        [":user_id", $topic["user_id"], PDO::PARAM_STR]
    ]);
}

function forgetTopic($topic) {
    dbInit();
    $sql = "UPDATE topics SET is_deleted=1 WHERE id=:id";
    dbExecute($sql, [
        [":id", $topic["id"], PDO::PARAM_INT]
    ]);
}

function linkSubcategoryToTopic($topic, $subcategory) {
    $topic["subcategory_id"] = $subcategory["id"];
    return $topic;
}

function linkUserToTopic($topic, $user) {
    $topic["user_id"] = $user["id"];
    return $topic;
}

function topicIsSendable($topic) {
    $nameIsSet = isset($topic["name"]) && !empty($topic["name"]);
    $contentIsSet = isset($topic["content"]) && !empty($topic["content"]);
    $dateIsSet = isset($topic["date"]) && !empty($topic["date"]);
    $subcategoryIdIsSet = isset($topic["subcategory_id"]) && !empty($topic["subcategory_id"]);
    $userIdIsSet = isset($topic["user_id"]) && !empty($topic["user_id"]);

    return $nameIsSet && $contentIsSet && $dateIsSet && $subcategoryIdIsSet && $userIdIsSet;
}
