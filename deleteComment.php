<?php

session_start();

include_once "src/comment.php";

forgetComment(pullComment($_GET['commentId']));
header("Location: topic.php?id=" . $_GET['topicId']);
