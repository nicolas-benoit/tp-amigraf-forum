<?php

function createUser($username, $password, $email, $role, $date, $is_deleted = 0) {
    return [
        "id" => -1,
        "username" => $username,
        "password" => $password,
        "email" => $email,
        "date" => $date,
        "is_deleted" => $is_deleted
    ];
}
