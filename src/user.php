<?php

include_once "database.php";

function createUser($username, $password, $email, $role, $date, $is_deleted = 0)
{
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

function pushUser($user)
{
    dbInit();
    $sql = "INSERT INTO users(username,password,email,role,date) VALUES (:username,:password,:email,:role,:date)";

    dbExecute($sql, [
        [":username", $user["username"], PDO::PARAM_STR],
        [":password", $user["password"], PDO::PARAM_STR],
        [":email", $user["email"], PDO::PARAM_STR],
        [":role", $user["role"], PDO::PARAM_STR],
        [":date", $user["date"], PDO::PARAM_STR]
    ]);
}

function pullUser($id)
{
    dbInit();
    $user = dbExecute("SELECT * FROM users WHERE id=:id;", [[":id", $id, PDO::PARAM_INT]]);
    return $user[0];
}

function updateUser($user)
{
    dbinit();
    $sql = "UPDATE users SET username=:username, password=:password, email=:email, role=:role, date=:date WHERE id=:id;";

    dbExecute($sql, [
        [":id", $user["id"], PDO::PARAM_INT],
        [":username", $user["username"], PDO::PARAM_STR],
        [":password", $user["password"], PDO::PARAM_STR],
        [":email", $user["email"], PDO::PARAM_STR],
        [":role", $user["role"], PDO::PARAM_STR],
        [":date", $user["date"], PDO::PARAM_STR]
    ]);
}

function pullUserList($amount = 20, $offset = 0)
{
    dbinit();
    $sql = "SELECT * FROM users WHERE is_deleted=0 ORDER BY date LIMIT :amount OFFSET :offset;";

    $userList = dbExecute($sql, [
        [":amount", $amount, PDO::PARAM_INT],
        [":offset", $offset, PDO::PARAM_INT]
    ]);

    return $userList;
}

function forgetUser($user)
{
    dbInit();
    $sql = "UPDATE users SET is_deleted=1 WHERE id=:id";
    dbExecute($sql, [
        [":id", $user["id"], PDO::PARAM_INT]
    ]);
}

function userIsSendable($user)
{
    $usernameIsSet = isset($user["username"]) && !empty($user["username"]);
    $passwordIsSet = isset($user["password"]) && !empty($user["password"]);
    $emailIsSet = isset($user["email"]) && !empty($user["email"]);
    $roleIsSet = ($user["role"] == "User" or $user["role"] == "Moderator" or $user["role"] == "Admin");
    $dateIsSet = isset($user["date"]) && !empty($user["date"]);


    return $usernameIsSet && $passwordIsSet && $emailIsSet && $roleIsSet && $dateIsSet;
}

function pullUserCount() {
    dbInit();
    $sql = "SELECT count(*) AS count FROM users WHERE is_deleted=0;";
    $count = dbExecute($sql);
    return intval($count[0]["count"]);
}

function pullUserStat($user) {
    dbInit();
    $sql = "SELECT count(*) AS topic_count FROM topics WHERE user_id=:user_id AND is_deleted=0";
    $topicCount = dbExecute($sql, [
        [":user_id", $user["id"], PDO::PARAM_INT]
    ]);
    $sql = "SELECT count(*) AS comment_count FROM comments WHERE user_id=:user_id AND is_deleted=0";
    $commentCount = dbExecute($sql, [
        [":user_id", $user["id"], PDO::PARAM_INT]
    ]);
    return [
        "topic_count" => $topicCount[0]["topic_count"],
        "comment_count" => $commentCount[0]["comment_count"]
    ];
}

function compareUser($user)
{
    dbInit();
    $toto = dbExecute('SELECT * FROM users WHERE username=:username;', [[":username", $user['username'], PDO::PARAM_STR]])[0];
    if (!empty($toto)) {
        if (password_verify($user['password'], $toto['password'])) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
function pullUserByUsername($username)
{
    dbInit();
    $selectUser = dbExecute('SELECT * FROM users WHERE username=:username;', [[":username", $username, PDO::PARAM_STR]])[0];

    return $selectUser;
}
