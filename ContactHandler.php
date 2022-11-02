<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];


    $email_from = 'sanu777221@gmail.com';

    $email_subject = "new contact form submission on portfolio";

    $email_body = "Uuser Name: $name.\n".
                  "User Email: $visitor_email.\n".
                   "User Message: $message.\n";
                   

    $to = "sanukr613@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: Contact.html");




?>