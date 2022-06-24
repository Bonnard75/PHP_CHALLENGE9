<?php

$user_lname = $_POST['user_lname'];
$user_name = $_POST['user_name'];
$sujet = $_POST['sujet'];
$user_mail = filter_var($_POST['user_mail'], FILTER_SANITIZE_EMAIL);
$user_tel = $_POST['user_tel'];
$user_message = $_POST['user_message'];
$err = '';

if (empty($user_lname)) {
    $err .= "Last name is required. ";
}
if (empty($user_name)) {
    $err .= "First name is required. ";
}
if (empty($user_mail)) {
    $err .= "Email is required. ";
} elseif (filter_var($user_mail, FILTER_VALIDATE_EMAIL)) {
    $err .= "Email is not valid. ";
}
if (empty($user_tel)) {
    $err .= "Telephone is required. ";
}
if (empty($user_message)) {
    $err .= "Message is required. ";
}

if (empty($err)) {
    echo 'Merci ', $user_lname, ' ', $user_name, ' de nous avoir contacté à propos de ', $sujet,'.<br><br>Un de nos conseiller vous contactera soit à l’adresse ', $user_mail, ' ou par téléphone au ', $user_tel, ' dans les plus brefs délais pour traiter votre demande :', $user_message;
} else {
    echo $err;
}

?>