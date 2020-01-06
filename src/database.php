<?php

include_once "databaseEnv.local.php";

$db;

function dbInit() {
    global $db;
    if (!isset($db)) {
        $db = new PDO("mysql:host=" . DB_HOST . ";port=3306;dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
    }
}

function dbExecute($sql, $args = []) {
    global $db;
    $query = $db->prepare($sql);
    $query->execute($args);
    return $query->fetchAll();
}
