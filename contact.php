
<?php

if($_POST["Send"]) {
    $recipient="kyrawayne.dev@gmail.com";
    $subject="Message from Personal Site";
    $firstName=$_POST["fn"];
    $lastName=$_POST["ln"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $firstName $lastName\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $firstName $lastName <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>