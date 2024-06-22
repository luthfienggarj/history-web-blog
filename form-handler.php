<?php

// Variable Dari Contact.html
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//Nama website gw
$email_form = 'info@independencehistory.com';

$email_subject = 'New Form Submission'

//Variable juga
$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n";

//Kemana email akan di kirim
$to = 'info@independencehistory.com';

$headers = "From: $email_form \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");

?>