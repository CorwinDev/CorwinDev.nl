<head>
    <link rel="stylesheet" href="../style.css">
</head>
<?php

include "../includes/connection.inc.php";

if ($_SESSION) {
    echo "<p>You are already logged in!</p>";


} else {
    if (isset($_POST['username'])) {
        $sql1 = "SELECT * FROM users WHERE username= '$_POST[username]'";
        $result1 = mysqli_query($database, $sql1);
        $matchFound = mysqli_num_rows($result1) > 0 ? 'yes' : 'no';

        if ($result1->num_rows == 0) {
            echo "Wrong credentials!";
        } else {
            $psswd = hash("sha256", $_POST['password']);
            $sql = "SELECT * FROM users WHERE (username = '$_POST[username]' and password= '$psswd')";
            $result = mysqli_query($database, $sql);
            //   print_r($result);
            $row = $result->fetch_assoc();
            if($row){
                echo "You are logged in!";
                $_SESSION["users"] = $_POST["username"];
                die();
            }else{
                echo "Wrong credentials!";
            };
 
        }
    };

?>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Username..." required>
        <br>
        <input type="password" name="password" placeholder="Password..." required>
        <br>
        <input type="Submit" name="Save">
    </form>
<?php
}
?>