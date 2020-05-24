<?php
    $name = $_POST['navn'];
    $visitor_email = $_POST['email'];
    $message = $_POST['besked']


    $email_from = 'munfrizo@gmail.com'

    $email_subject = "Ny Indsendelse"

    $email_body = "Brugernavn: $name.\n".
                    "Bruger Email: $visitor_email.\n".
                        "Bruger Besked: $message.\n";


    $to = "philipdanthelin@gmail.com";

    $headers = "Fra $email_from \r\n";

    $headers .= "Svar: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers)

    header("Lokation: kontakt.html");

?>