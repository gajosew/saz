<?php
$to      = 'seweryn.gajek@bsb.com.pl';
$subject = 'SAZ - Nowy Wniosek o Dostep';
$message = "Wygenerowano nowy wniosek\nNie odpowiadaj na tego maila";
$headers = 'From: saz@bsb.com.pl' . "\r\n" .
    
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?> 
