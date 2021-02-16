<?php
    
    if(!isset($_POST['submit'])) {
        echo "error; you need to submit the form!";
    }


    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = "maxml12.me@gmail.com";
    $email_subject = "New Suggestion";
    $email_body = "You have received a new suggestion from the user
                   $name.\n
                   $message";

    $to = "maxml12.me@gmail.com";
    $headers = "From: $email \r\n";


    function IsInjected($str)
    {
        $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
        );
               
        $inject = join('|', $injections);
        $inject = "/$inject/i";
    
        if(preg_match($inject,$str))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    if(IsInjected($visitor_email))
    {
        echo "Bad email value!";
        exit;
    }

    
    mail($to, $email_subject, $email_body, $headers);

?>