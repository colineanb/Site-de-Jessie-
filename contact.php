<?php

$destinataire = $_POST['user_mail'];
$name = $_POST['user_name'];
$message = $_POST['user_message'];
$objet = $_POST['user_sujet'];


mail($destinataire, $objet, $message);
?>
