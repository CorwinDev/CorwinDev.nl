<?php

if (!$_SESSION) {
    header("Location: /CorwinDev.nl/panel/login.php"); /* Redirect browser */
}else{
    if(!$_SESSION["users"]) {
        header("Location: /CorwinDev.nl/panel/login.php"); /* Redirect browser */
    }
}