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
