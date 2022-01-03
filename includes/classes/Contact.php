<?php
namespace rt;

include "Database.php";

class Contact{


    public static function sendToEmail($data)
    {
        if (!filter_var($data['sender_email'], FILTER_VALIDATE_EMAIL))
        {
            return "email";
        }

        //Add to database
        $return = Database::addContactFormSub($data);

        $subject    = "[RT.com] New Contact Form Submission: ".$data['sender_name'];
        $to         = "queenofrehab@gmail.com";
        $message    = "From: ".$data['sender_name']." (".$data['sender_email'].")
                       Subject: ".$data['sender_subject']."
                       Message: ".$data['sender_message'];

        mail($to, $subject, $message);

        return $return;

    }
}