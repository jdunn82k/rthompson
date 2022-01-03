<?php

namespace rt;
use DateTime;
use PDO;
use PDOException;

class Database
{
    private static $user = "thehunts_webapp";
    private static $pass = "kM#fGluwnOGY";
    private static $db = "thehunts_webapps";
    private static $dbo = false;

    private static function connect()
    {
        if (!self::$dbo)
        {
            try{
                self::$dbo = new PDO("mysql:dbname=".self::$db.";host=localhost", self::$user, self::$pass);
                self::$dbo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

            } catch (PDOException $e)
            {
                echo "There was an error with loading the page. Please try again later";
                mail("jdunn82k@gmail.com", "www.robynthompson.com DATABASE ERROR", $e->getMessage());
                exit;
            }
        }
        return true;
    }

    public static function addContactFormSub($data)
    {
        self::connect();
        $query = "INSERT INTO contact_form (sender_name, email, message, subject) VALUES (:sender_name, :email, :message, :subject)";
        $binds = [
                ":sender_name" => $data['sender_name'],
                ":email" => $data['sender_email'],
                ":message" => $data['sender_message'],
                ":subject" => $data['sender_subject']
                ];

        try{
            $sth = self::$dbo->prepare($query);
            $sth->execute($binds);
            return json_encode($sth->errorInfo());
        } catch (PDOException $e)
        {
            return $e->getMessage();
        }
    }
    public static function getVenueById($id)
    {
        self::connect();
        $query = "SELECT * FROM venues WHERE id = :id";
        $binds = [":id" => $id];
        try{
            $sth = self::$dbo->prepare($query);
            $sth->execute($binds);
            $results = $sth->fetch();
        } catch (PDOException $e)
        {
            return $e->getMessage();
        }

        return $results;
    }
    public static function getVenues()
    {
        self::connect();
        $query = "SELECT * FROM venues";
        $sth = self::$dbo->query($query);
        $results = $sth->fetchAll();
        return $results;
    }
    public static function getEventById($id)
    {
        self::connect();
        $query = "SELECT * FROM events WHERE id = :id";
        $binds = [":id" => $id];
        try{
            $sth = self::$dbo->prepare($query);
            $sth->execute($binds);
            $results = $sth->fetch();
        } catch (PDOException $e)
        {
            return $e->getMessage();
        }

        return $results;
    }
    public static function getUpcomingEvents()
    {
        self::connect();
        $today = new DateTime();
        $query = "SELECT * FROM events WHERE end_date > '".$today->format("Y-m-d")."'";
        try{
            $sth = self::$dbo->query($query);
            $results = $sth->fetchAll();
        } catch (PDOException $e)
        {
            return $e->getMessage();
        }

        return $results;

    }
}
