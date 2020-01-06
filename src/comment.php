<?php

function createTopic($content, $date, $is_deleted = 0) {
    return [
        "id" => -1,
        "content" => $content
        "date" => $date,
        "is_deleted" => $is_deleted,

        "topic_id" => -1,
        "user_id" => -1
    ];
}
