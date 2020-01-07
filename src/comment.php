<?php

include_once "database.php";

function createComment($content, $date, $is_deleted = 0) {
    return [
        "id" => -1,
        "content" => $content,
        "date" => $date,
        "is_deleted" => $is_deleted,

        "topic_id" => -1,
        "user_id" => -1
    ];
}

function pushComment($comment) {
    dbInit();
    $sql = "INSERT INTO comments(content,date,topic_id,user_id) VALUES (:content,:date,:topic_id,:user_id)";

    dbExecute($sql, [
        [":content", $comment["content"], PDO::PARAM_STR],
        [":date", $comment["date"], PDO::PARAM_STR],
        [":topic_id", $comment["topic_id"], PDO::PARAM_STR],
        [":user_id", $comment["user_id"], PDO::PARAM_STR]
    ]);
}

function pullComment($id) {
    dbInit();
    $comment = dbExecute("SELECT * FROM comments WHERE id=:id;", [[":id", $id, PDO::PARAM_INT]]);
    return $comment[0];
}

function pullCommentList($topic_id, $amount = 20, $offset = 0) {
    dbinit();
    $sql = "SELECT * FROM comments WHERE topic_id=:topic_id AND is_deleted=0 ORDER BY date LIMIT :amount OFFSET :offset;";

    $commentList = dbExecute($sql, [
        [":topic_id", $topic_id, PDO::PARAM_INT],
        [":amount", $amount, PDO::PARAM_INT],
        [":offset", $offset, PDO::PARAM_INT]
    ]);

    return $commentList;
}

function updateComment($comment) {
    dbinit();
    $sql = "UPDATE comments SET content = :content, date = :date,topic_id = :topic_id,user_id = :user_id WHERE id=:id;";

    dbExecute($sql, [
        [":id", $comment["id"], PDO::PARAM_INT],
        [":content", $comment["content"], PDO::PARAM_STR],
        [":date", $comment["date"], PDO::PARAM_STR],
        [":topic_id", $comment["topic_id"], PDO::PARAM_STR],
        [":user_id", $comment["user_id"], PDO::PARAM_STR]
    ]);
}

function forgetComment($comment) {
    dbInit();
    $sql = "UPDATE comments SET is_deleted=1 WHERE id=:id";
    dbExecute($sql, [
        [":id", $comment["id"], PDO::PARAM_INT]
    ]);
}

function linkTopicToComment($comment, $topic) {
    $comment["topic_id"] = $topic["id"];
    return $comment;
}

function linkUserToComment($comment, $user) {
    $comment["user_id"] = $user["id"];
    return $comment;
}

function commentIsSendable($comment) {
    $contentIsSet = isset($comment["content"]) && !empty($comment["content"]);
    $dateIsSet = isset($comment["date"]) && !empty($comment["date"]);
    $topicIdIsSet = isset($comment["topic_id"]) && !empty($comment["topic_id"]);
    $userIdIsSet = isset($comment["user_id"]) && !empty($comment["user_id"]);

    return $contentIsSet && $dateIsSet && $topicIdIsSet && $userIdIsSet;
}
