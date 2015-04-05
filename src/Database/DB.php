<?php
namespace Database;

class DB
{
    /**
     * PDO
     * 
     * @var \PDO
     */
    private $pdo;
    
    /**
     * Initializes DB Connection
     * 
     * @param string $dsn PDO DSN
     * @param string $dbname Database name
     * @param string $user Database username
     * @param string $pass Database password
     */
    public function __construct($dsn, $dbname, $user, $pass)
    {
        try {
            $this->pdo = new \PDO($dsn, $user, $pass, array(
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ));
            $this->pdo->exec("CREATE DATABASE IF NOT EXISTS $dbname");
            $this->pdo->exec("USE $dbname");
        } catch (\PDOException $ex) {
            echo "Connection failure: " . $ex->getMessage();
        }
    }
    
    public function getConnection()
    {
        return $this->pdo;
    }
}
