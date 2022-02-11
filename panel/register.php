<head>
    <link rel="stylesheet" href="../style.css">
</head>
<?php

include "../includes/connection.inc.php";
if($_SESSION) header("Location: /CorwinDev.nl/panel/client"); /* Redirect browser */

if (isset($_POST['username'])) {
    $sql1 = "SELECT * FROM users WHERE username= '$_POST[username]'";
    $result1 = mysqli_query($database, $sql1);
    if ($result1->num_rows == 0) {
        $password = hash("sha256", $_POST['password']);
        $sql = "INSERT INTO users (username, password) VALUES ('$_POST[username]', '$password')";
        if (mysqli_query($database, $sql)) {
            $_SESSION["users"] = $_POST["username"];
            echo "Succes!";
            header("Location: /CorwinDev.nl/panel/login.php"); /* Redirect browser */
        } else {
            echo "Error!";
        }
    }else{
        echo "Please choose another username! This username is already in use!";
    }


};

?>
<div class='form'>
    <br>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Username..." required>
        <br>
        <input type="password" name="password" placeholder="Password..." required>
        <br>
        <input type="Submit" name="Save">
    </form>
</div>