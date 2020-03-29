<?php

class DB
{
    private $connection;

    public function __construct()
    {
        $dbname = getenv('DB_NAME');
        $host = getenv('DB_HOST');
        $charset = 'utf8mb4';
        $dsn = "mysql:dbname=$dbname;host=$host;charset=$charset";

        $username = getenv('DB_USER');
        $password = getenv('DB_PASS');
        $driver_options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        $this->connection = new PDO($dsn, $username, $password, $driver_options);
    }

    public function getConnection(): PDO
    {
        return $this->connection;
    }
}

