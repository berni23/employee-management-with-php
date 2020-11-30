<?php
class Database
{
    function connect()
    {
        try {
            $connection = "mysql:host=" . $_ENV['DB_SERVER_NAME'] . ";dbname=" . $_ENV['DB_NAME'] . ";";
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            $pdo = new PDO($connection, $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $options);
            return $pdo;
        } catch (PDOException $e) {
            print_r('Error connection: ' . $e->getMessage());
        }
    }
}
