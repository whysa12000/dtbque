<?php
$name = $_POST['name'];
$email = $_POST['email'];
$email-message = $_POST['email-message'];
$formcontent=" From: $name \n Email : $email \n Message: $email-message";
$recipient = "iaaslcunej@gmail.com";
$subject = "contact";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php\">";
?>

