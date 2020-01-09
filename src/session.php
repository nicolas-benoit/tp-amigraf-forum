<?php
include_once "user.php";

// Who is connected from session 
function checkIfConnected()
{
    if (!empty($_SESSION['connectedUser'])) {
        return true;
    } else {
        return false;
    }
}

// Add connected User from session 
function addUserToSession($user_id)
{
    $_SESSION['connectedUser'] = $user_id;
}

// Destroy the session
function removeUserFromSession()
{
    session_destroy();
}

// get a connected user
function getConnectedUser()
{
    return pullUser($_SESSION['connectedUser']);
}
