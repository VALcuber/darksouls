<?php


    class DB
    {
        const USER = "root";
        const PASS = "";
        const HOST = "127.0.0.1";
        const DB   = "darksouls";

        public static function connToDB()
        {

            $user = self::USER;
            $pass = self::PASS;
            $host = self::HOST;
            $db = self::DB;
            try
            {
                $conn = new PDO("mysql:host=$host", $user, $pass);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "CREATE DATABASE IF NOT EXISTS $db";
                $conn->exec($sql);

            }
            catch (PDOException $e)
            {
                echo 'Неудалось связаться с базой данных';
            }
        }
    }
