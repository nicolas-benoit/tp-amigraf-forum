<?php

session_start();

include_once "src/topic.php";

forgetTopic(pullTopic($_GET['topicId']));
header("Location: sub-categories.php?id=" . $_GET['subcategoriesId']);
