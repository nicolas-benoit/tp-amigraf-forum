<?php

function createSubcategory($name, $date, $is_deleted = 0) {
    return [
        "id" => -1,
        "name" => $name,
        "date" => $date,
        "is_deleted" => $is_deleted,

        "category_id" => -1
    ];
}
