<?php

if(isset($_POST["submit"])) {
    $recipient ="babsanylimited@yahoo.com";
    $subject=" Babsany Nig Limited";
    $sender=$_POST["firstname"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";
    ini_set("SMTP","mail.YourDomain.com");
    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    echo "Your mail has been sent successfuly ! Thank you for your feedback";
}

?>