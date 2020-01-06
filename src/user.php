<?php

include_once "database.php";

function createUser($username, $password, $email, $role, $date, $is_deleted = 0) {
    return [
        "id" => -1,
        "username" => $username,
        "password" => $password,
        "email" => $email,
        "role" => $role,
        "date" => $date,
        "is_deleted" => $is_deleted
    ];
}

function pushUser($user, $update = false) {
    dbInit();
    if (!$update) {
        $sql = "INSERT INTO users(username,password,email,role,date) VALUES (:username,:password,:email,:role,:date)";

        dbExecute($sql, [
            ":username" => $user["username"],
            ":password" => $user["password"],
            ":email" => $user["email"],
            ":role" => $user["role"],
            ":date" => $user["date"]
        ]);
    } else {
        $sql = "UPDATE users SET username=:username, password=:password, email=:email, role=:role, date=:date WHERE id=:id;";

        dbExecute($sql, [
            ":id" => $user["id"],
            ":username" => $user["username"],
            ":password" => $user["password"],
            ":email" => $user["email"],
            ":role" => $user["role"],
            ":date" => $user["date"]
        ]);
    }
}

function pullUser($id) {
    dbInit();
    $user = dbExecute("SELECT * FROM users WHERE id=:id;", [":id" => $id]);
    return $user[0];
}
