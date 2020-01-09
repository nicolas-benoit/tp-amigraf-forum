<?php
session_start();

include_once "src/user.php";
include_once "src/session.php";
include_once "src/utils.php";

if (isset($_POST['connection'])) {
  if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {
    $user = ["username" => $_POST['username'], "password" => $_POST['password']];
    if (compareUser($user) == true) {
      addUserToSession(pullUserByUsername($user['username'])["id"]);
      redirect($_GET["return"]);
    } else {
        if (strpos($_GET["return"], "?") == false) {
            redirect($_GET["return"] . "?loginFailed=true");
        } else {
            redirect($_GET["return"] . "&loginFailed=true");
        }
    }
  }
}
