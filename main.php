<?php
    if(!isset($_POST['submit'])) {
        echo "error; you need to submit the form!";
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = "maxml12.me@gmail.com";
    $email_subject = "Suggestion";
    $email_body = "You have recieved a new suggestion from the user
                   $name.\n
                   $message";

    $to = "maxml12.me@gmail.com";
    $headers = "From: $email \r\n";

    mail($to, $email_subject, $email_body, $headers);

?>