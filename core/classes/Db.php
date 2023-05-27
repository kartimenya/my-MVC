<?php

class Db
{
    private PDO $connection;

    function __construct(array $db_config)
    {
        $dsn = "mysql:host={$db_config['host']};dbname={$db_config['dbname']};charset={$db_config['charset']}";
        try {
            $this->connection = new PDO($dsn, $db_config['username'], $db_config['password'], $db_config['options']);
        } catch (PDOException $e) {
            abort(500);
        }
    }

    public function query($query): PDOStatement
    {
        $stmt = $this->connection->query($query);
        $stmt->execute();
        return $stmt;
    }
}
