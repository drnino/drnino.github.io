<?php
     $name = $_POST["name"];
     $visitor_email = $_POST["email"];
     $message = $_POST["message"];

     $email_form = 'satudominguez@gmail.com';

     $email_subject = "Nueva solicitud de informacion";

     $email_body = "User Name: $name.\n".
                    "User email: $visitor_email.\n".
                    "User message: $message.\n";

     $to = "satudominguez@gmail.com";

     $headers = "From: $email_from \r\n";

     $headers .= "Replay-to: $visitor_email \r\n ";

     mail ($to, $email_subject, $email_body, $headers);

     header("Location: index.html")

?>
