<?php
$name = $_POST{'name'};
$email = $_POST{'email'};
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_message = "

Name: ".$name."
Email: ".$email."
Subject: ".$subject."
Message: ".$message."

";

mail ("pdmproject2017wd1@gmail.com" , "New Message", $email_message);
header("location: ../mail-success.html ");
?>


