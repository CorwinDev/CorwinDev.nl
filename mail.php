<?php
require 'vendor/autoload.php';
include "includes/connection.inc.php";
$email = new \SendGrid\Mail\Mail();
$email->setFrom("site@corwindev.nl", "CorwinDev Contact Form");
$sendgrid = new \SendGrid("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");

if (isset($_POST['submit'])) {
    $email->setSubject("Get in touch form!");
    $email->addTo("info@corwindev.nl", "CorwinDev.nl Email Manager");
    $email->addContent("text/plain", "FirstName: " . $_POST["first_name"] . "LastName: " . $_POST["last_name"] . "Message: " . $_POST["message"]);
    $email->addCc($_POST["email"], $_POST["first_name"] . $_POST["last_name"]);

    try {
        $response = $sendgrid->send($email);
        echo "Email is send!";
    } catch (Exception $e) {
        echo 'Caught exception: ' . $e->getMessage() . "\n";
    }
}
?>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<ul>
    <li><a href="/">Home</a></li>
    <li><a href="/contact.php">Contact</a></li>
    <li><a href="/projects.php">Projects</a></li>
</ul>
<div class="fillin">

<h1>Fill in the contact from down here to get in touch with me!</h1>

</div>
<body>
    <div class="contactform">
        <form action="" method="post">
            First Name: <br><input type="text" name="first_name" placeholder="FirstName..." required><br>
            Last Name: <br><input type="text" name="last_name" placeholder="Lastname..." required><br>
            Email: <br><input type="text" name="email" placeholder="Email..." required><br>
            Message:<br><textarea rows="5" name="message" cols="30" placeholder="Message..." required></textarea><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
<footer>
    
</footer>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>