<?php
include "../includes/connection.inc.php";
if (!$_SESSION) {
    header("Location: /CorwinDev.nl/panel/login.php"); /* Redirect browser */
    die();
} else {
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();
    header("Location: /CorwinDev.nl/panel/login.php"); /* Redirect browser */

}
