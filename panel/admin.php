<head>
    <link rel="stylesheet" href="../style.css">
</head>
<ul>
    <li><a href="/">Home</a></li>
    <li><a href="../logout.php">Logout</a></li>
    <li><a href="./downloads.php">Downloads</a></li>
</ul>
<?php

include "../includes/connection.inc.php";

include "../includes/checkforlogin.inc.php";
if ($_POST) {
    $sql = "UPDATE users SET  projects='$_POST[projects]', project_download='$_POST[project_download]', project_price='$_POST[project_price]'  WHERE username='$_POST[user]'";
    $result = mysqli_query($database, $sql);

    print_r($_POST);
}
if ($_SESSION['users'] !== "Corwin") {
    echo "You are not an admin!!";
    die();
}
$sql = "SELECT * FROM users";
$result = mysqli_query($database, $sql);

// Top level Items
echo '<div class="custom-select">';
echo '<form action="" method="post">';
echo "<label for='cars'>Choose a car:</label><br><br>";
echo "<select name='user' id='cars'>";

while ($row = mysqli_fetch_assoc($result)) {

    echo "<option value='$row[username]'>$row[username]</option>";
}
echo "</select>";

?>

<br><input type="text" name="projects" placeholder="ProjectName..." required>
<br><input type="text" name="project_price" placeholder="ProjectPrice..." required>
<br><input type="text" name="project_download" placeholder="ProjectDownload..." required>
<br>

<input type="submit" name="submit" value="Submit">
</form>
</div>