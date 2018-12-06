<?php

if(isset($_POST['submit_contact'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "bellablue97@rocketmail.com";//DONT USE GMAIL HERE!! must forward to emails from the other email account to gmail
    $headers = "Message: ".$message;
    $person = "Reply to: ".$mailFrom;
    $txt = "You have been contacted by: ".$name;

    mail($mailTo, $txt, $headers, $person);
    header("Location: home.html?mailsend");
}