<head>
    <link rel="stylesheet" href="../../style.css">
</head>
<ul>
    <li><a href="/">Home</a></li>
    <li><a href="../logout.php">Logout</a></li>
    <li><a href="./downloads.php">Downloads</a></li>
</ul>
<?php
include "../../includes/connection.inc.php";

include "../../includes/checkforlogin.inc.php";
$sql = "SELECT * FROM users WHERE username='$_SESSION[users]'";
$result = mysqli_query($database, $sql);
$result = mysqli_fetch_assoc($result);
if (!$result['projects']) {
    echo "<h5>None projects detected!</h5>";
} else {
    echo "<h5>Project name: " . $result['projects'] . "</h5>";
    echo "<h5>Project Price: " . $result['project_price'] . "</h5>";
    echo "<h5>Project download: " . "<a href='" . $result['project_download'] . "'>Lol</a>" . "</h5>";
}
?>