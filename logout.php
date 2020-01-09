<?php
session_start();
session_destroy();
include_once "src/utils.php";

if (strpos($_GET["return"], "?") == false) {
    redirect($_GET["return"] . "?disconnected=true");
} else {
    redirect($_GET["return"] . "&disconnected=true");
}
 ?>
