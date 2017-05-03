<?php
    $email="fulvio.pereira@hotmail.com,analaura.tronzano@hotmail.com";
    $head = "From: rsvp@casamentolaurieful.com.br";
    $headers = "Content-Type: text/html; charset=UTF-8";
    $title= "RSVP - CASAMENTO";
    $body = $_POST['nomes'];  
    $success = mail($email, $title, $body, $head);
?>