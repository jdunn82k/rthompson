<?php
session_start();

include "../includes/classes/Contact.php";

if (!empty($_POST['token'])) {
    if (hash_equals($_SESSION['token'], $_POST['token'])) {
        $data = [
            "sender_name" => $_POST['name'],
            "sender_email" => $_POST['email'],
            "sender_message" => $_POST['message'],
            "sender_subject" => $_POST['subject']
        ];

        $return = \rt\Contact::sendToEmail($data);

        echo $return;
        exit;
    } else {
        echo "Invalid Use of API";
        exit;
    }
}



