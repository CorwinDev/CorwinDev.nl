<head>
    <link rel="stylesheet" href="../style.css">
</head>
<?php

include "../includes/connection.inc.php";
if (isset($_POST['username'])) {
    $password = hash("sha256", $_POST['password']);
    $sql = "INSERT INTO users (username, password) VALUES ('$_POST[username]', '$password')";
    if (mysqli_query($database, $sql)) {
        $_SESSION["users"] = $_POST["username"];
        echo "Succes!";
        header("Location: /CorwinDev.nl/panel/login.php"); /* Redirect browser */
    } else {
        echo "Error!";
    }
};

?>
<div class='form'>
    <br>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Username..." required=true>
        <br>
        <input type="password" name="password" placeholder="Password..." required>
        <br>
        <input type="Submit" name="Save">
    </form>
</div>